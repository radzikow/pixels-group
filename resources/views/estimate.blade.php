@extends('layouts.app')

@section('content')

{{-- Estimate Section --}}
<section class="estimate-section">
  <div class="container estimate-wrapper">

    <div class="row estimate-title-wrapper">
      <div class="col text-center title-wrapper">
        <h2 class="section-title">Estimate your project</h2>
        <p class="section-additional-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
    </div>

    <div class="estimate-content-wrapper">

      {{-- Details --}}
      <div class="row estimate-details-wrapper">
        <div class="col-12 estimate-details-title">
          <h3>ENTER YOUR DETAILS:</h3>
        </div>

        <div class="col-md-6 col-lg-4 estimate-details">
          <div class="estimate-detail-single">
            <h4>NAME AND SURNAME <span>*</span></h4>
            <input type="text" placeholder="Name and surname">
            <p class="error-msg">NAME AND SURNAME ARE REQUIRED</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-details">
          <div class="estimate-detail-single">
            <h4>E-MAIL ADDRESS <span>*</span></h4>
            <input type="text" placeholder="" value="janedoe@mail.com">
            <p class="error-msg">E-MAIL ADDRESS IS REQUIRED</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-details">
          <div class="estimate-detail-single">
            <h4>PHONE NUMBER <span>*</span></h4>
            <input type="text" placeholder="Phone number">
            <p class="error-msg">PHONE NUMBER IS REQUIRED</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-details">
          <div class="estimate-detail-single">
            <h4>COMPANY NAME</h4>
            <input type="text" placeholder="Company name">
            <p class="error-msg"></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-details">
          <div class="estimate-detail-single">
            <h4>WEBSITE ADDRESS</h4>
            <input type="text" placeholder="Website address">
            <p class="error-msg"></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-details">
          <div class="estimate-detail-single">
            <h4>PHONE NUMBER</h4>
            <input type="text" placeholder="Phone number">
            <p class="error-msg"></p>
          </div>
        </div>
      </div>

      {{-- Services --}}
      <div class="row estimate-services-wrapper">
        <div class="col-12 estimate-services-title">
          <h3>CHOOSE SERVICES:</h3>
        </div>

        <div class="col-md-6 col-lg-4 estimate-services">
          <div class="estimate-services-single">
            <img src="/svg/s1-dark.svg" alt="Service">
            <h2>WEBSITE GRAPHIC PROJECT</h2>
            <p>Choose this if you want us to make only website graphic project</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-services">
          <div class="estimate-services-single">
            <img src="/svg/s2-dark.svg" alt="Service">
            <h2>RWD WEBSITE</h2>
            <p>Choose this if you have a website graphic project and you want us to program it</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-services">
          <div class="estimate-services-single">
            <img src="/svg/s3-dark.svg" alt="Service">
            <h2>WEB APPLICATION</h2>
            <p>Choose this if you want a modern web application</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-services">
          <div class="estimate-services-single">
            <img src="/svg/s4-dark.svg" alt="Service">
            <h2>WEBSITE RECONSTRUCTION</h2>
            <p>Choose this if you want to rebuild your current website</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-services">
          <div class="estimate-services-single">
            <img src="/svg/s5-dark.svg" alt="Service">
            <h2>HOSTING AND DOMAINS
              MANAGEMENT</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 estimate-services">
          <div class="estimate-services-single">
            <img src="/svg/s6-dark.svg" alt="Service">
            <h2>OTHER SERVICE</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>

      {{-- Additional Info --}}
      <div class="row estimate-additional-wrapper">

        <div class="col-12 estimate-additional-title">
          <h3>OTHER INFORMATIONS:</h3>
        </div>

        <div class="col-md-12 estimate-additional-info">
          <label for="subpages">How many and what pages/subpages would you like to have on a website?</label>
          <textarea name="subpages" id="" cols="30" rows="4"></textarea>
        </div>

        <div class="col-md-12 estimate-additional-info">
          <label for="websites">Provide examples/links to websites, applications or graphics that you like.</label>
          <textarea name="websites" id="" cols="30" rows="4"></textarea>
        </div>

        <div class="col-md-12 estimate-additional-info">
          <label for="functions">What functionalities do you want to have in your project (e.g. contact form,
            newsletter, adding blog posts etc.)?</label>
          <textarea name="functions" id="" cols="30" rows="4"></textarea>
        </div>

        <div class="col-md-12 estimate-additional-info">
          <label for="functions">You can provide here additional information.</label>
          <textarea name="functions" id="" cols="30" rows="4"></textarea>
        </div>

      </div>

      {{-- Upload File --}}
      <div class="row estimate-file-wrapper">

        <div class="col-12 estimate-file-title">
          <h3>UPLOAD FILES:</h3>
        </div>

        <div class="col-md-12 estimate-file-upload">
          <label for="upload-file">
            <input type="file" name="upload-file" id="uploadFile">
            <div>
              <img src="/svg/upload.svg" alt="Upload Files">
              <p>Upload Files</p>
            </div>
          </label>
        </div>

      </div>

      {{-- Submit Form --}}
      <div class="row estimate-submit-wrapper">

        <div class="estimate-submit-privacy">
          <label for="checkbox-privacy">
            <input type="checkbox" name="checkbox-privacy" id="checkbox-privacy">
            <span class="label-text">
              I allow the processing of my personal data and accept <a href="{{ url('/cookies') }}"> privacy & cookies
                policy</a>
            </span>
          </label>
        </div>

        <div class="estimate-submit-button">
          <button type="submit">Send a estimate request</button>
        </div>

      </div>

    </div>

  </div>
</section>


{{-- Contact Us Section --}}
@include('layouts.partials.contactus')

@endsection
