<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Nerdify\SmsGateway\SmsGatewayChannel;
use Nerdify\SmsGateway\SmsGatewayMessage;

class SendInvoiceSmsNotification extends Notification
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
        $user = $this->penjualan->user->fullName();
        $kode_penjualan = $this->penjualan->kode;
        $total = $this->penjualan->sales->sum('total');
        $bayar = $this->penjualan->bayar;

        $content = "Sdr. $user Kd.Nota Tanggihan Anda $kode_penjualan Adalah Sebesasr $total Dengan Total Pembayaran Sementara $bayar";
        
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
