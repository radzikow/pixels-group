<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
  use Queueable, SerializesModels;

  protected $mail;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($mail)
  {
    $this->mail = $mail;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->from($this->mail->email, $this->mail->name)
      ->subject('Wiadomość z formularza kontaktowego - pixels.group')
      ->view('mails.contact')
      ->text('mails.contact_plain')
      ->with([
        'name' => $this->mail->name,
        'email' => $this->mail->email,
        'phone' => $this->mail->phone,
        'message' => $this->mail->message
      ]);
  }
}
