<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartAcquisitionmail extends Mailable
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
    protected $detail;

    public function __construct($name, $phone, $email, $detail)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->detail = $detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Part Acquisition Contact Mail')
            ->view('mails.partacquisition', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            'detail' => $this->detail,
            ]);
    }
}
