<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DummyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.dummy')
                    ->with([
                        'pembuka'  => ' Assalamualaikum Wr. Wb. ',
                        'isi' => 'Saya ngirim email nih spesial buat anda',
                        'penutup' => 'Terima Kasih'
                    ]);
    }
}
