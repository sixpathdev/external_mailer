<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mooragemail extends Mailable
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
    protected $location;
    protected $loa;
    protected $type;

    public function __construct($name, $phone, $email, $loa, $location, $type)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->loa = $loa;
        $this->location = $location;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Moorage Contact Mail')
            ->view('mails.moorage', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'type' => $this->type,
                'loa' => $this->loa,
                'location' => $this->location,
            ]);
    }
}
