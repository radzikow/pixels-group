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
<section class="contact-form-section">
  <div class="container contact-form-wrapper">

    <div class="row contact-form-title-wrapper">
      <div class="col text-center title-wrapper">
        <h2 class="section-title">Write to us</h2>
      </div>
    </div>

    <div class="row contact-form-content-wrapper">

      <form action="" method="">

        <div class="col col-md-10 offset-md-1 contact-form-content">

          <div class="row contact-info">
            <div class="col-md-4">
              <input type="text" placeholder="Name and surname">
            </div>
            <div class="col-md-4">
              <input type="text" placeholder="E-mail address">
            </div>
            <div class="col-md-4">
              <input type="text" placeholder="Phone number">
            </div>
          </div>

          <div class="message">
            <textarea name="" id="" cols="30" rows="10" placeholder="Write your message..."></textarea>
          </div>

          <div class="row privacy">
            <label for="checkbox-privacy">
              <input type="checkbox" name="checkbox-privacy" id="checkbox-privacy">
              <span class="label-text">
                I allow the processing of my personal data and accept <a href="{{ url('/cookies') }}"> privacy & cookies
                  policy</a>
              </span>
            </label>
          </div>

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

    {{-- Map goes below --}}
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
