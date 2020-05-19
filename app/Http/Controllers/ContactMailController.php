<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ContactMailController extends Controller
{
  public function send(Request $request)
  {
    // ------------------------------
    // validation (file)
    if ($request->hasFile('file')) {
      $validator = Validator::make($request->all(), [
        'name' => 'required|max:50',
        'email' => 'required|email',
        'phone' => 'max:50',
        'message' => 'required|max:5000',
        'policy' => 'required',
        'file' => 'file|max:5120'
      ]);
    } else {
      // ------------------------------
      // validation (no file)
      $validator = Validator::make($request->all(), [
        'name' => 'required|max:50',
        'email' => 'required|email',
        'phone' => 'max:50',
        'message' => 'required|max:5000',
        'policy' => 'required',
      ]);
    }

    // ------------------------------
    // redirect
    if ($validator->fails()) {
      return redirect('contact#contactSection')
        ->withErrors($validator)
        ->withInput();
    }

    // ------------------------------
    // new mail object
    $mailObj = new \stdClass();

    $mailObj->name = $request->name;
    $mailObj->email = $request->email;
    $mailObj->phone = $request->phone;
    $mailObj->message = $request->message;
    $mailObj->fileName = $request->file->getClientOriginalName();
    $mailObj->fileType = $request->file->getMimeType();
    $mailObj->filePath = $request->file->getRealPath();

    // ------------------------------
    // send mail
    Mail::to('hello@pixels.group')->send(new ContactMail($mailObj));

    // ------------------------------
    // sending mail failed
    if (Mail::failures()) {
      Session::flash('mailAlert', 'Error occured while sending message. Please try again later.');
      Session::flash('mailStatus', 'error');

      return redirect('contact#contactSection');
    }

    // ------------------------------
    // sending mail successed
    Session::flash('mailAlert', 'Your message has been sent. We will contact you shortly.');
    Session::flash('mailStatus', 'success');

    return redirect('contact#contactSection');
  }
}
