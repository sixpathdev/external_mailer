<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Haloutsmail extends Mailable
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
    protected $boatmodel;
    protected $dryweight;
    protected $loa;
    protected $beam;
    protected $height;

    public function __construct($name, $phone, $email, $boatmodel, $dryweight, $loa, $beam, $height)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->boatmodel = $boatmodel;
        $this->dryweight = $dryweight;
        $this->loa = $loa;
        $this->beam = $beam;
        $this->height = $height;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Halout Contact Mail')
            ->view('mails.halout', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'boatmodel' => $this->boatmodel,
                'dryweight' => $this->dryweight,
                'loa' => $this->loa,
                'beam' => $this->beam,
                'height' => $this->height,
            ]);
    }
}
