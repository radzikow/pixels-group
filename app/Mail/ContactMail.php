<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
  use Queueable, SerializesModels;

  public $mail;

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
    $senderMail = $this->mail->email;
    $senderName = $this->mail->name;
    $fileName = $this->mail->fileName;
    $fileType = $this->mail->fileType;
    $filePath = $this->mail->filePath;

    return $this->from($senderMail, $senderName)
      ->subject('Message from contact form - pixels.group')
      ->replyTo($senderMail, $senderName)
      ->view('mails.contact.contact')
      ->text('mails.contact.contact_plain')
      ->attach($filePath, [
        'as' => $fileName,
        'mime' => $fileType,
      ]);
  }
}
