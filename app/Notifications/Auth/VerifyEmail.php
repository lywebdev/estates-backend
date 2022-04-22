<?php

namespace App\Notifications\Auth;

use App\Mail\Auth\Verification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmail extends VerifyEmailBase
{
    public function toMail($notifiable)
    {
        return (new Verification($this->verificationUrl($notifiable)))->to($notifiable->email);
    }
}
