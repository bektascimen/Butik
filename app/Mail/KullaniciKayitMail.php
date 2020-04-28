<?php

namespace App\Mail;

use App\Models\Kullanici;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KullaniciKayitMail extends Mailable
{
    use Queueable, SerializesModels;

    public $kullanici;

    /**
     * Create a new message instance.
     *
     * @param Kullanici $kullanici
     */
    public function __construct(Kullanici $kullanici)
    {
        $this -> kullanici = $kullanici;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(config('app.name'). ' - Kullanıcı Kaydı')
            ->view('mails.kullanici_kayit');
    }
}
