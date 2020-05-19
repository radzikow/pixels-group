<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EstimateMail extends Mailable
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
    $senderName = $this->mail->name;
    $senderMail = $this->mail->email;

    $attachments = [];

    foreach ($this->mail->files as $file) {
      $attachments[$file->getRealPath()] = [
        'as' => $file->getClientOriginalName(),
        'mime' => $file->getMimeType()
      ];
    }

    $queryMail = $this->subject('Project estimation request - pixels.group');
    $queryMail = $this->view('mails.estimate.estimate');
    $queryMail = $this->text('mails.estimate.estimate_plain');
    $queryMail = $this->replyTo($senderMail, $senderName);

    foreach ($attachments as $filePath => $fileParameters) {
      $queryMail->attach($filePath, $fileParameters);
    }

    return $queryMail;
  }
}
