<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Transportmail extends Mailable
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
    protected $start_location;
    protected $end_location;
    protected $dry_weight;
    protected $loa;
    protected $beam;
    protected $height;

    public function __construct($name, $phone, $email, $start_location, $end_location, $dry_weight, $loa, $beam, $height)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->start_location = $start_location;
        $this->end_location = $end_location;
        $this->dry_weight = $dry_weight;
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
            ->subject('Transport Contact Mail')
            ->view('mails.transport', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            'start_location' => $this->start_location,
            'end_location' => $this->end_location,
            'dry_weight' => $this->dry_weight,
            'loa' => $this->loa,
            'beam' => $this->beam,
            'height' => $this->height,
            ]);
    }
}
