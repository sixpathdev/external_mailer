<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Insurancemail extends Mailable
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
    protected $summary;

    public function __construct($name, $phone, $email, $summary)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->summary = $summary;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Insurance Contact Mail')
            ->view('mails.insurance', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            'summary' => $this->summary,
            ]);
    }
}
