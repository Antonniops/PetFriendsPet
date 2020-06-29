<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\User;
use App\Mail\ConfirmAppointment;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Save an appointment in db
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveAppointment(Request $request){


        //Datos para la consulta
        $cita = [
            'fecha_cita' => $request->input('fecha_cita'),
            'user_id' => $request->input('user_id')
        ];

        //Comprueba si ha introducido una fecha válida
        if ($cita['fecha_cita'] < date('Y-m-d')) {
            return response()
                ->json(['message' => 'Escoge una fecha valida.'], 202);
        }

        //Comprueba si ya tiene una cita para este dia
        $cita_escogida = $this->getAppointment($cita['user_id'], $cita['fecha_cita']);
        
        if( ! $cita_escogida->isEmpty()){
            return response()
                ->json(['message' => 'Ya tienes una cita para este dia.', 'status' => 202], 202);
        }

        //Inserta la cita
        Appointment::saveAppointment($cita);
        $data = User::select('email')->where('id', $cita['user_id'])->first();

        //Correo de confirmacion
        Mail::to($data->email)->send(new ConfirmAppointment());
        Mail::to('testantonniops@gmail.com')->send(new ConfirmAppointment());

        $fecha_formateada = date('d-m-Y', strtotime($cita['fecha_cita']));

        return response()
                    ->json(['message' => 'Se le ha asignado una cita para el día ' . $fecha_formateada, 'status' => 201], 201);

    }

    /**
     * Save an appointment in db
     *
     * @param  string  Id del usuario
     * @return \Illuminate\Http\Response
     */
    public function getAppointment($user_id, $fecha){

        //Inserta la cita
        $cita = Appointment::getAppointment($user_id, $fecha);

        return $cita;

    }
}
