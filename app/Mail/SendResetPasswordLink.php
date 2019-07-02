<?php

namespace App\Mail;

// load Model
use App\Model\Staff;
use App\Model\PasswordReset;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendResetPasswordLink extends Mailable
{
	use Queueable, SerializesModels;
	public $token;

	public function __construct($token)
	{
		$this->token = $token;
	}

	public function build()
	{
		// cari nama  staff dulu
		$email = PasswordReset::where('token', $this->token)->first()->email;
		$name = Staff::where('email', $email)->first()->name;

        return $this->markdown('mailer.sendPasswordResetLink')
            // ->from('address', 'name')
            ->from('noreply@prpctelecommania.com', 'Admin of Finding Report')
            // ->text('emails.orders.shipped_plain');
            // ->replyTo($address, $name)
            ->subject('Reset Password Link for '.$name)
            // ->attach(storage_path().'/uploads/pdf/'.$filename)
            ->with([
            	'name' => $name,
            	'token' => $this->token
            ])
            ;
        }
}
