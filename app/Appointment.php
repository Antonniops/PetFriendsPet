<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Appointment extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'fecha_cita', 'user_id'
    ];

     /**
     * Save an appointment in db
     *
     * @param  string  $cita
     * @return Collection
     */
   public static function saveAppointment($cita){

        if(!$cita){
            return null;
        }

        $data = User::select('email')->where('id', $cita['user_id'])->first();
        
                    
        $cita['email'] = $data->email;

        //Inserta la cita
        Appointment::insert($cita);

        return $cita;

    }

    
     /**
     * Get an appointment from db
     *
     * @param  int  $user_id
     * @return Collection
     */
    public static function getAppointment($user_id, $fecha){

        $cita = null;

        if(!$user_id){
            return $cita;
        };


        //Comprueba si existe una cita hoyy
        $cita = Appointment::where('user_id', $user_id)
                        ->where('fecha_cita', $fecha)
                        ->get();

        return $cita;

    }

    public $timestamps = false;
}
