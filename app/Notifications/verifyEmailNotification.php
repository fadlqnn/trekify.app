<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class verifyEmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $verificationCode;

    public function __construct($verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */

    public function toMail(object $notifiable): MailMessage
    {
        $verificationCode = $this->verificationCode;
        return (new MailMessage)
            ->subject('Verifikasi Email')
            ->line('Gunakan Kode Verifikasi Ini. Jangan Bagikan Kode Ini Kepada Siapapun Termasuk Kami. Kode Hanya Berlaku 5 Menit.')
            ->line($verificationCode)
            ->line('KODE VERIFIKASI', $verificationCode)
            ->line('Terima Kasih Telah Mendaftar!');
    }

    public function with($notifiable)
    {
        return [
            'verificationCode' => $this->verificationCode,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
