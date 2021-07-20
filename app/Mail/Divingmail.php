<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Divingmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $name;
    protected $phone;
    protected $email;
    protected $bs;
    protected $bi;
    protected $ac;
    protected $mc;

    public function __construct($name, $phone, $email,$bs, $bi, $ac, $mc)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->bs = $bs;
        $this->bi = $bi;
        $this->ac = $ac;
        $this->mr = $mr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Diving Contact Mail')
            ->view('mails.diving', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            'bs' => $this->bs,
            'bi' => $this->bi,
            'ac' => $this->ac,
            'mr' => $this->mr,
            ]);
    }
}
