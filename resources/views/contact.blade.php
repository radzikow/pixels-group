@extends('layouts.app')

@section('content')

{{-- Contact Informations Section --}}
<section class="contact-information-section">
  <div class="container contact-information-wrapper">

    <div class="row contact-information-title-wrapper">
      <div class="col text-center title-wrapper">
        <h2 class="section-title">Let's stay in contact</h2>
      </div>
    </div>

    <div class="row contact-information-content-wrapper">

      <div class="col-md-4 contact-information-content">
        <img src="/svg/address.svg" alt="Address">
        <div class="contact-information-content-text">
          <h3>ADDRESS</h3>
          <p>Pixel Group Ltd.<br>
            M2 4WU, 15 Central St<br>
            Manchester, UK</p>
        </div>
      </div>

      <div class="col-md-4 contact-information-content">
        <img src="/svg/phoneno.svg" alt="Phone Number">
        <div class="contact-information-content-text">
          <h3>PHONE</h3>
          <p class="phoneno">021 2345 6789</p>
        </div>
      </div>

      <div class="col-md-4 contact-information-content">
        <img src="/svg/email.svg" alt="Email Address">
        <div class="contact-information-content-text">
          <h3>E-MAIL</h3>
          <p class="email">hello@pixelsgroup.co</p>
          <p class="openings-time">We are open from Monday to Friday from 8:00 to 16:00</p>
        </div>
      </div>

    </div>

  </div>
</section>


{{-- Contact Form Section --}}
<section id="contactSection" class="contact-form-section">
  <div class="container contact-form-wrapper">

    <div class="row contact-form-title-wrapper">
      <div class="col text-center title-wrapper">
        <h2 class="section-title">Write to us</h2>
      </div>
    </div>

    <div class="row contact-form-content-wrapper">

      {{-- Contact form --}}
      <form action="/contact/mail" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="col col-md-10 offset-md-1 contact-form-content">

          {{-- Alerts after validation --}}
          <div class="row main-msg-wrapper">
            @if ($errors->any())
            <div class="main-msg main-msg-danger">
              <p>Error occured! Please verify all the
                fields.</p>
            </div>

            <div class="main-msg main-msg-primary">
              <p>Can't send message thru the form? You can write to us directly at
                <span id="mailBtn" class="tooltip">hello@pixels.group
                  <span class="tooltiptext mailTooltipText">Copy</span></span></p>
            </div>
            @endif
          </div>

          {{-- Alerts after sending message --}}
          @if(Session::has('mailAlert') && Session::has('mailStatus'))
          <div class="row main-msg-wrapper">
            <div
              class="main-msg {{ Session::get('mailStatus') == 'success' ?  'main-msg-success' : 'main-msg-danger'}}">
              <p>{{ Session::get('mailAlert') }}</p>
            </div>
          </div>
          @endif

          <div class="row contact-info">
            <div class="col-md-4">

              {{-- name --}}
              <label for="name">Name and surname*</label>
              <input type="text" name="name" placeholder="Name and surname" value="{{ old('name') }}">
              @error('name')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>

            {{-- e-mail --}}
            <div class="col-md-4">
              <label for="email">E-mail address*</label>
              <input type="text" name="email" placeholder="E-mail address" value="{{ old('email') }}">
              @error('email')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>

            {{-- phone --}}
            <div class="col-md-4">
              <label for="phone">Phone number</label>
              <input type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}">
              @error('phone')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          {{-- message --}}
          <div class="message-wrapper">
            <label for="message">Message*</label>
            <textarea name="message" cols="30" rows="10"
              placeholder="Write a message...">{{ old('message') }}</textarea>
            @error('message')
            <div class="msg msg-danger">{{ $message }}</div>
            @enderror
          </div>

          {{-- file --}}
          <div class="row file-wrapper">
            <label for="file">Upload file (max 5MB)</label>
            <input id="fileInput" type="file" name="file" hidden>
            <button id="fileBtn" onclick="document.getElementById('fileInput').click();" type="button" class="file">
              Upload file
            </button>

            @error('file')
            <div class="msg msg-danger msg-file">{{ $message }}</div>
            @enderror
          </div>

          {{-- policy --}}
          <div class="row privacy-wrapper">
            <label for="policy" id="policyLabel">
              <input type="checkbox" name="policy" id="policy" class="checkbox-privacy"
                {{ old('policy') == 'on' ? 'checked' : '' }}>
              <span class="label-text">
                I allow the processing of my personal data and accept <a href="{{ url('/cookies') }}" target="_blank"> privacy & cookies
                  policy</a>
              </span>
            </label>
            @error('policy')
            <div class="msg msg-danger msg-policy">{{ $message }}</div>
            @enderror
          </div>

          {{-- submit --}}
          <div class="row button">
            <button type="submit">SEND MESSAGE</button>
          </div>

        </div>

      </form>

    </div>

  </div>
</section>

{{-- Map Section --}}
<section class="map-section">
  <div class="map-wrapper">

    {{-- google map --}}
    <div class="contact-map">
      <div class="mapouter">
        <div class="gmap_canvas"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7013.211307269254!2d-2.250971776185014!3d53.47882187142933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1c2111f6eff%3A0x68d9eac864644959!2s15%20Central%20St%2C%20Manchester%2C%20Wielka%20Brytania!5e0!3m2!1spl!2spl!4v1584550894783!5m2!1spl!2spl"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe></div>
      </div>
    </div>

  </div>

</section>


{{-- Get Estimate Section --}}
@include('layouts.partials.getestimate')


@endsection
