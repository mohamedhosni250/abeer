<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmitted extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->view('emails.application')
            ->subject('Application Submitted')
            ->with('data', $this->data);

        // Attach the files
        $email->attachFromStorage($this->data['pic']);
        $email->attachFromStorage($this->data['certificate1']);
        $email->attachFromStorage($this->data['certificate2']);
        $email->attachFromStorage($this->data['certificate3']);

        return $email;
    }
}
