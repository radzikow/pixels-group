<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
  public function send(Request $request)
  {
    // return $request;

    // ------------------------------
    // validation
    $validator = $request->validate([
      'name' => 'required|max:5000',
      'email' => 'required|email',
      'phone' => '',
      'message' => 'required',
      'file' => 'file|size:10240',
      'policy' => 'required'
    ]);

    if ($validator->fails()) {
      // ------------------------------
      // redirect
      return redirect('contact')
        ->withErrors($validator)
        ->withInput();
    }

    // ------------------------------
    // new mail object
    $mail  = new \stdClass();

    $mail->name = $request->name;
    $mail->email = $request->email;
    $mail->phone = $request->phone;
    $mail->message = $request->message;

    // ------------------------------
    // send mail
    Mail::to('test-ec3cfa@inbox.mailtrap.io')->send(new ContactMail($mail));
  }
}
