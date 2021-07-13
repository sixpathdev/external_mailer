<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Financemail extends Mailable
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
    protected $spec;
    protected $amount;

    public function __construct($name, $phone, $email, $amount, $spec)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->amount = $amount;
        $this->spec = $spec;
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
            ->view('mails.finance', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            'amount' => $this->amount,
            'spec' => $this->spec,
            ]);
    }
}
