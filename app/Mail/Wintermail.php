<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Wintermail extends Mailable
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
    protected $locationOfVessel;
    public $subject;

    public function __construct($name, $phone, $email, $locationOfVessel)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->locationOfVessel = $locationOfVessel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Winter Contact Mail')
            ->view('mails.winter', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            'locationOfVessel' => $this->locationOfVessel
            ]);
    }
}
