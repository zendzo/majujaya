<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Nerdify\SmsGateway\SmsGatewayChannel;
use Nerdify\SmsGateway\SmsGatewayMessage;

class RemainderPenjualanNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($penjualan)
    {
        $this->penjualan = $penjualan;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [SmsGatewayChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toSmsGateway($notifiable)
    {
        $user = $this->penjualan->user->first_name;
        $kode_penjualan = $this->penjualan->kode;
        $total = $this->penjualan->sales->sum('total');
        $bayar = $this->penjualan->bayar;

        $content = "Yth. $user Kd.Nota $kode_penjualan Dengan Tagihan Sebesar $total, Telah Jatuh Tempo!";
        
        return (new SmsGatewayMessage)->content($content);
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
