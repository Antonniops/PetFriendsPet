<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use Illuminate\Auth\Notifications\ResetPassword;

class MailResetPasswordNotification extends ResetPassword
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        parent::__construct($token);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $link = url( "/reset-password/" . $this->token );

        return ( new MailMessage )
                ->subject( 'Notificación de reseteo de contraseña' )
                ->line( "¡Hola! Estas recibiendo este email porque hemos recibido una petición de reseteo de contraseña para su cuenta." )
                ->action( 'Resetear contraseña', $link )
                ->line( "Esta enlace caducará en  ".config('auth.passwords.users.expire')." minutos" )
                ->line( "Si no solicitaste un reseteo de contraseña, no requiere que realices ninguna acción." )
                ->salutation('Saludos, PetFriends');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
