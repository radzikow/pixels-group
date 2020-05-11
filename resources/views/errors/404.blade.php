@extends('layouts.app')

@section('content')

{{-- Error Message Section --}}
<section class="error-message-section">
  <div class="container error-message-wrapper">

    <div class="row error-message-img">
      <img src="/svg/404.svg" alt="Page Not Found">
    </div>

    <div class="row error-message-msg">
      <p>Page Not Found</p>
    </div>

    <div class="row error-message-button">
      <a href="{{ url('/')}}">Back to Home Page</a>
    </div>

  </div>
</section>

{{-- Contact Us Section --}}
@include('layouts.partials.contactus')

@endsection
