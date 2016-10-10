<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Reminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $lineId;

    public function __construct($lineId)
    {
        $this->lineId = $lineId;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('cornerstone@app.co.uk', 'Cornestone Admin')
        ->subject('Promotional Box ')
        ->view('emails.reminder');
    }
}
