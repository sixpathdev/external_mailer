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
    protected $option;

    public function __construct($name, $phone, $email, $option)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->option = $option;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Financing Contact Mail')
            ->view('mails.diving', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            'option' => $this->option,
            ]);
    }
}
