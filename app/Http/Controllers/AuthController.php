<?php

namespace App\Http\Controllers;
use App\User;
use DB;

use App\Mail\RegisterVerification;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;



class AuthController extends Controller
{


    //Sobreescribe algunos metodos para adaptarlos a Vue
    use SendsPasswordResetEmails, ResetsPasswords {
        SendsPasswordResetEmails::broker insteadof ResetsPasswords;
        ResetsPasswords::credentials insteadof SendsPasswordResetEmails;
    }


    /**
     * Proccess a login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
           
            // Check if a user with the specified email exists
            $user = User::where('email',request('username'))->first();
            if (!$user) {
                return response()->json([
                    'message' => 'Email o contraseña no son válidos',
                    'status' => 422
                ], 422);
            }

            // If a user with the email was found - check if the specified password
            // belongs to this user
            if (!Hash::check(request('password'), $user->password)) {
                return response()->json([
                    'message' => 'Email o contraseña no son válidos',
                    'status' => 422
                ], 422);
            }
    
            // Send an internal API request to get an access token
            $client = DB::table('oauth_clients')
            ->where('password_client', true)
            ->first();

            // Make sure a Password Client exists in the DB
            if (!$client) {
                return response()->json([
                    'message' => 'Laravel Passport is not setup properly.',
                    'status' => 500
                ], 500);
            }

            $data = [
                'grant_type' => 'password',
                'client_id' => $client->id,
                'client_secret' => $client->secret,
                'username' => request('username'),
                'password' => request('password'),
            ];
    
            $request = Request::create('/oauth/token', 'POST', $data);
            $response = app()->handle($request);
    
            // Check if the request was successful
            if ($response->getStatusCode() != 200) {
                return response()->json([
                    'message' => 'Email o contraseña no son válidos',
                    'status' => 422
                ], 422);
            }
            // Get the data from the response
            $data = json_decode($response->getContent());
    
            // Format the final response in a desirable format
            return response()->json([
                'token' => $data->access_token,
                'user' => $user->getAttributes(),
                'status' => 200
            ]);

    }

    //-------------------------------------------------------------//
    //-------------------------------------------------------------//


    /**
     * Deletes actives tokens.
     *
     * @return \Illuminate\Http\Response
     */
     public function logout()
    {
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        
        return response()->json('Ha cerrado sesión correctamente', 200);
    }


    //-------------------------------------------------------------//
    //-------------------------------------------------------------//


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'name.required' => 'El campo nombre es obligatorio.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'student.max' =>'Las contraseñas no coinciden.'
        ];

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], $messages);

    }


    //-------------------------------------------------------------//
    //-------------------------------------------------------------//



    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        
        $validation = $this->validator($request->all());

        if ($validation->fails()) {

          return response()->json(['errors'=>$validation->errors()]);
          
        }

        event(new Registered($user = $this->create($request->all())));


        //Correo de confirmacion
        Mail::to($request->input('email'))->send(new RegisterVerification());

        return response()->json([
            //'redirect' => 'http://localhost/auth-login',
            'success' => 'Registration Successful!'
            ], 201);
    }


    //-------------------------------------------------------------//
    //-------------------------------------------------------------//


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => '1',
            'promociones' => $data['promociones']

        ]);
    }

    //-------------------------------------------------------------//
    //-------------------------------------------------------------//


    /**
     * Get a validator for an incoming shipping information request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function shipping_validator(array $data)
    {
        $messages = [

            'codigo_postal.numeric' => 'El código postal debe contener únicamente números.',
            'codigo_postal.digits' => 'El código postal no debe contener más de 5 digitos.',
            'codigo_postal.numeric' => 'El codigo postal debe contener únicamente números.'

        ];

        return Validator::make($data, [
            'email' => ['required', 'string', 'email'],
            'codigo_postal' => ['required', 'numeric', 'digits:5'],
            'calle' => ['required', 'string', 'max:100'],
            'municipio' => ['required', 'string'],
            'numero' => ['required', 'string'],

        ], $messages);

    }

    //-------------------------------------------------------------//
    //-------------------------------------------------------------//



    /**
     * Handle a shipping request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shipping_information(Request $request)
    {
        
        $validation = $this->shipping_validator($request->all());

        if ($validation->fails()) {

          return response()->json(['errors'=>$validation->errors()]);
          
        }

        return response()->json([
            //'redirect' => 'http://localhost/auth-login',
            'success' => 'Los datos son correctos.'
            ], 201);
    }


    //-------------------------------------------------------------//
    //-------------------------------------------------------------//

    /**
     * Send password reset link. 
     */
    public function sendPasswordResetLink(Request $request)
    {
        return $this->sendResetLinkEmail($request);
    }

    //-------------------------------------------------------------//
    //-------------------------------------------------------------//


    /**
     * Get the response for a successful password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response()->json([
            'message' => 'Se ha enviado el email de reestablecimiento.',
            'data' => $response
        ]);
    }

    //-------------------------------------------------------------//
    //-------------------------------------------------------------//



    /**
     * Get the response for a failed password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response()->json(['message' => 'El email no se ha podido enviar a esta dirección de correo.']);
    }

     //-------------------------------------------------------------//
    //-------------------------------------------------------------//

    /**
     * Handle reset password 
     */
    public function callResetPassword(Request $request)
    {
        return $this->reset($request);
    }

    //-------------------------------------------------------------//
    //-------------------------------------------------------------//

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);
        $user->save();

        event(new PasswordReset($user));
    }

    //-------------------------------------------------------------//
    //-------------------------------------------------------------//

    /**
     * Get the response for a successful password reset.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetResponse(Request $request, $response)
    {
        return response()->json(['message' => 'Contraseña reseteada correctamente.']);
    }


    //-------------------------------------------------------------//
    //-------------------------------------------------------------//


    /**
     * Get the response for a failed password reset.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response()->json(['message' => 'Fallo, token inválido.'], 422);
    }


     //-------------------------------------------------------------//
    //-------------------------------------------------------------//


     /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.confirmed' =>'Las contraseñas no coinciden.',
            'password.min' => 'La contraseña debe contener como mínimo 8 caracteres'
        ];
    }


}
