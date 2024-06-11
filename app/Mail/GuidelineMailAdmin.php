<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class GuidelineMailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $guide_name;
    public $guide_email;
    public $guide_message;

    public function __construct($guide_name,$guide_email,$guide_message){
        $this->guide_name=$guide_name;
        $this->guide_email=$guide_email;
        $this->guide_message=$guide_message;
      }



    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Guideline Mail Admin',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
   public function build()
    {
        $name=$this->guide_name;
        $email=$this->guide_email;
        $message=$this->guide_message;
        return $this->subject('Guideline Mail')
                    ->view('admin.newsletter.guidelineAdmin',compact('name','email','message')); // The view containing email content
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
