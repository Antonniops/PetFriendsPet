<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{

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
            'codigo_postal.numeric' => 'El codigo postal debe contener únicamente números.'
        ];

        return Validator::make($data, [
            'email' => ['required', 'string', 'email'],
            'codigo_postal' => ['required', 'numeric', 'size:5'],
            'calle' => ['required', 'string', 'max:100'],
            'municipio' => ['required', 'string'],
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
            'success' => 'Successful data verification!'
            ], 201);
    }
}
