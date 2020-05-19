<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\EstimateMail;
use Illuminate\Support\Facades\Session;

class EstimateController extends Controller
{
  // ===============================
  // Show estiamte page
  public function index()
  {
    return view('estimate');
  }

  // ===============================
  // Estimate form
  public function query(Request $request)
  {
    // ------------------------------
    // validation (file)
    if ($request->hasFile('files')) {
      $validator = Validator::make($request->all(), [
        'name' => 'required|min:3|max:50',
        'email' => 'required|confirmed|email',
        'phone' => 'required|min:3|max:5000',
        'policy' => 'required',
        'files' => 'max:10240'
      ]);
    } else {
      // ------------------------------
      // validation (no file)
      $validator = Validator::make($request->all(), [
        'name' => 'required|min:3|max:50',
        'email' => 'required|confirmed|email',
        'phone' => 'required|min:3|max:5000',
        'policy' => 'required'
      ]);
    }

    // ------------------------------
    // redirect
    if ($validator->fails()) {
      return redirect('estimate')
        ->withErrors($validator)
        ->withInput();
    }

    // ------------------------------
    // new mail object
    $mailObj = new \stdClass();

    // details
    $mailObj->name = $request->name;
    $mailObj->email = $request->email;
    $mailObj->phone = $request->phone;
    $mailObj->company = $request->company;
    $mailObj->website = $request->website;

    // services
    $services = implode(", ", $request->input('service'));
    $mailObj->services = $services;

    // additional info
    $mailObj->subpages = $request->subpages;
    $mailObj->examples = $request->examples;
    $mailObj->functions = $request->functions;
    $mailObj->details = $request->details;

    // files
    if ($request->hasfile('files')) {
      $files = [];

      foreach ($request->files as $key => $file) {
        $files[$key] = $file;
      }

      $mailObj->files = $files['files'];
    }

    // ------------------------------
    // send mail
    Mail::to('hello@pixels.group')->send(new EstimateMail($mailObj));
    // NOTE: change e-mail address if needed
    // test-ec3cfa@inbox.mailtrap.io
    // hello@pixels.group

    // ------------------------------
    // sending mail failed
    if (Mail::failures()) {
      Session::flash('estimateAlert', 'Error occured while sending estimate request. Please try again later.');
      Session::flash('estimateStatus', 'error');

      return redirect('estimate');
    }

    // ------------------------------
    // sending mail successed
    Session::flash('estimateAlert', 'Your request has been sent. We will send an approximate quote for your project shortly to ' . $request->email);
    Session::flash('estimateStatus', 'success');

    return redirect('estimate');
  }
}
