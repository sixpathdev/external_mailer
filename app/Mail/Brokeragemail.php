<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Brokeragemail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $firm_name;
    protected $name;
    protected $email;
    protected $title;
    protected $message;
    protected $price_range;
    public function __construct($firm_name, $name, $email, $title, $message, $price_range)
    {
        $this->firm_name = $firm_name;
        $this->name = $name;
        $this->email = $email;
        $this->title = $title;
        $this->message = $message;
        $this->price_range = $price_range;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Brokerage Contact Mail')
            ->view('mails.brokerage', [
                'firm_name' => $this->firm_name,
                'name' => $this->name,
            'email' => $this->email,
            'title' => $this->title,
            'message' => $this->message,
            'price_range' => $this->price_range,
            ]);
    }
}
