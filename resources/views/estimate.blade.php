@extends('layouts.app')

@section('content')

{{-- Estimate Section --}}
<section class="estimate-section">
  <div class="container estimate-wrapper">

    <div class="row estimate-title-wrapper">
      <div class="col text-center title-wrapper">
        <h2 class="section-title">Estimate your project</h2>
        <p class="section-additional-text">
          Fill out the form below to receive an approximate quote for your project. The final price is set before the
          contract is signed.
        </p>
      </div>
    </div>

    <div class="estimate-content-wrapper">

      {{-- Contact form --}}
      <form action="/estimate/query" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Alerts after validation --}}
        <div class="row main-msg-wrapper">
          @if ($errors->any())
          <div class="main-msg main-msg-danger">
            <p>Error occured! Please verify all the
              fields.</p>
          </div>
          @endif
        </div>

        {{-- Alerts after sending message --}}
        @if(Session::has('estimateAlert') && Session::has('estimateStatus'))
        <div class="row main-msg-wrapper">
          <div
            class="main-msg {{ Session::get('estimateStatus') == 'success' ?  'main-msg-success' : 'main-msg-danger'}}">
            <p>{{ Session::get('estimateAlert') }}</p>
          </div>
        </div>
        @endif

        {{-- Details --}}
        <div class="row estimate-details-wrapper">
          <div class="col-12 estimate-details-title">
            <h3>ENTER YOUR DETAILS:</h3>
          </div>

          {{-- name --}}
          <div class="col-md-6 col-lg-4 estimate-details">
            <div class="estimate-detail-single">
              <label for="name">NAME AND SURNAME<span>*</span></label>
              <input name="name" type="text" placeholder="Name and surname" value="{{ old('name') }}"
                class="{{ $errors->has('name') ? 'input-danger' : '' }} {{ (old('name') && !$errors->has('name')) ? 'input-success' : '' }}">
              @error('name')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          {{-- e-mail --}}
          <div class="col-md-6 col-lg-4 estimate-details">
            <div class="estimate-detail-single">
              <label for="email">E-MAIL ADDRESS<span>*</span></label>
              <input name="email" type="text" placeholder="E-mail address" value="{{ old('email') }}"
                class="{{ $errors->has('email') ? 'input-danger' : '' }} {{ (old('email') && !$errors->has('email')) ? 'input-success' : '' }}">
              @error('email')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          {{-- confirm e-mail --}}
          <div class="col-md-6 col-lg-4 estimate-details">
            <div class="estimate-detail-single">
              <label for="email_confirmation">CONFIRM E-MAIL ADDRESS<span>*</span></label>
              <input name="email_confirmation" type="text" placeholder="Confirm e-mail address"
                value="{{ old('email_confirmation') }}"
                class="{{ $errors->has('email_confirmation') ? 'input-danger' : '' }} {{ (old('email_confirmation') && !$errors->has('email_confirmation')) ? 'input-success' : '' }}">
              @error('email_confirmation')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          {{-- phone number --}}
          <div class="col-md-6 col-lg-4 estimate-details">
            <div class="estimate-detail-single">
              <label for="phone">PHONE NUMBER<span>*</span></label>
              <input name="phone" type="text" placeholder="Phone number" value="{{ old('phone') }}"
                class="{{ $errors->has('phone') ? 'input-danger' : '' }} {{ (old('phone') && !$errors->has('phone')) ? 'input-success' : '' }}">
              @error('phone')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          {{-- company name --}}
          <div class="col-md-6 col-lg-4 estimate-details">
            <div class="estimate-detail-single">
              <label for="company">COMPANY NAME</label>
              <input name="company" type="text" placeholder="Company name" value="{{ old('company') }}"
                class="{{ $errors->has('company') ? 'input-danger' : '' }} {{ (old('company') && !$errors->has('company')) ? 'input-success' : '' }}">
              @error('company')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          {{-- website address --}}
          <div class="col-md-6 col-lg-4 estimate-details">
            <div class="estimate-detail-single">
              <label for="website">WEBSITE ADDRESS</label>
              <input name="website" type="text" placeholder="Website address" value="{{ old('website') }}"
                class="{{ $errors->has('website') ? 'input-danger' : '' }} {{ (old('website') && !$errors->has('website')) ? 'input-success' : '' }}">
              @error('website')
              <div class="msg msg-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

        </div>

        {{-- Services --}}
        <div class="row estimate-services-wrapper">
          <div class="col-12 estimate-services-title">
            <h3>CHOOSE SERVICES:</h3>
          </div>

          <div class="col-md-6 col-lg-4 estimate-services">
            <div class="estimate-services-single {{ is_array(old('service')) && in_array('website graphic project', old('service')) ? 'selectedService' : '' }}">
              <img src="/svg/s1-dark.svg" alt="Service">
              <h2>WEBSITE GRAPHIC PROJECT</h2>
              <p>Choose this if you want us to create website graphic project</p>
              {{-- hidden input --}}
              <input type="checkbox" id="service1" name="service[]" value="website graphic project" hidden {{ is_array(old('service')) && in_array('website graphic project', old('service')) ? 'checked' : '' }}>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 estimate-services">
            <div class="estimate-services-single {{ is_array(old('service')) && in_array('rwd website', old('service')) ? 'selectedService' : '' }}">
              <img src="/svg/s2-dark.svg" alt="Service">
              <h2>RWD WEBSITE</h2>
              <p>Choose this if you have a website graphic project and you want us to program it</p>
              {{-- hidden input --}}
              <input type="checkbox" id="service2" name="service[]" value="rwd website" hidden {{ is_array(old('service')) && in_array('rwd website', old('service')) ? 'checked' : '' }}>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 estimate-services">
            <div class="estimate-services-single {{ is_array(old('service')) && in_array('web application', old('service')) ? 'selectedService' : '' }}">
              <img src="/svg/s3-dark.svg" alt="Service">
              <h2>WEB APPLICATION</h2>
              <p>Choose this if you want us to create a modern web application</p>
              {{-- hidden input --}}
              <input type="checkbox" id="service3" name="service[]" value="web application" hidden {{ is_array(old('service')) && in_array('web application', old('service')) ? 'checked' : '' }}>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 estimate-services">
            <div class="estimate-services-single {{ is_array(old('service')) && in_array('website recontruction', old('service')) ? 'selectedService' : '' }}">
              <img src="/svg/s4-dark.svg" alt="Service">
              <h2>WEBSITE RECONSTRUCTION</h2>
              <p>Choose this if you want us to rebuild your current website</p>
              {{-- hidden input --}}
              <input type="checkbox" id="service4" name="service[]" value="website recontruction" hidden {{ is_array(old('service')) && in_array('website recontruction', old('service')) ? 'checked' : '' }}>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 estimate-services">
            <div class="estimate-services-single {{ is_array(old('service')) && in_array('hosting and domains', old('service')) ? 'selectedService' : '' }}">
              <img src="/svg/s5-dark.svg" alt="Service">
              <h2>HOSTING AND DOMAINS</h2>
              <p>Choose this if you want us to manage and configure your domain/s and server/s.</p>
              {{-- hidden input --}}
              <input type="checkbox" id="service5" name="service[]" value="hosting and domains" hidden {{ is_array(old('service')) && in_array('hosting and domains', old('service')) ? 'checked' : '' }}>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 estimate-services">
            <div class="estimate-services-single {{ is_array(old('service')) && in_array('other service', old('service')) ? 'selectedService' : '' }}">
              <img src="/svg/s6-dark.svg" alt="Service">
              <h2>OTHER SERVICE</h2>
              <p>Choose this if you need any other service related to websites and web applications.</p>
              {{-- hidden input --}}
              <input type="checkbox" id="service6" name="service[]" value="other service" hidden {{ is_array(old('service')) && in_array('other service', old('service')) ? 'checked' : '' }}>
            </div>
          </div>
        </div>

        {{-- Additional Info --}}
        <div class="row estimate-additional-wrapper">

          <div class="col-12 estimate-additional-title">
            <h3>OTHER INFORMATIONS:</h3>
          </div>

          <div class="col-md-12 estimate-additional-info">
            <label for="subpages">How many and what pages/subpages would you like to have on your website?</label>
            <textarea class="{{ (old('subpages') && !$errors->has('subpages')) ? 'textarea-success' : '' }}" name="subpages" cols="30" rows="4">{{ old('subpages') }}</textarea>
          </div>

          <div class="col-md-12 estimate-additional-info">
            <label for="examples">Provide examples/links to websites, applications or graphics that you like.</label>
            <textarea class="{{ (old('examples') && !$errors->has('examples')) ? 'textarea-success' : '' }}" name="examples" cols="30" rows="4">{{ old('examples') }}</textarea>
          </div>

          <div class="col-md-12 estimate-additional-info">
            <label for="functions">What functionalities do you want to have in your project (e.g. contact form,
              newsletter, adding blog posts etc.)?</label>
            <textarea class="{{ (old('functions') && !$errors->has('functions')) ? 'textarea-success' : '' }}" name="functions" cols="30" rows="4">{{ old('functions') }}</textarea>
          </div>

          <div class="col-md-12 estimate-additional-info">
            <label for="details">You can provide here additional information. The more details the better :)</label>
            <textarea class="{{ (old('details') && !$errors->has('details')) ? 'textarea-success' : '' }}" name="details" cols="30" rows="4">{{ old('details') }}</textarea>
          </div>

        </div>

        {{-- Upload File --}}
        <div class="row estimate-file-wrapper">

          <div class="col-12 estimate-file-title">
            <h3>UPLOAD FILES:</h3>
          </div>

          <div class="col-md-12 estimate-file-upload">
            <label>
              <input id="uploadFilesInput" type="file" name="files[]" multiple>

              <button id="uploadFilesBtn" onclick="document.getElementById('uploadFilesInput').click();" type="button"
                class="file">
                <img src="/svg/upload.svg" alt="Upload Files">
                <p id="inputText">Upload Files</p>
                <p class="uploadedFileNames" id="uploadedFileNames"></p>
              </button>
            </label>
          </div>

        </div>

        {{-- Policy --}}
        <div class="row privacy-wrapper">
          <label for="policy" id="policyLabel">
            <input type="checkbox" name="policy" id="policy" class="checkbox-privacy"
              {{ old('policy') == 'on' ? 'checked' : '' }}>
            <span class="label-text">
              I allow the processing of my personal data and accept <a href="{{ url('/cookies') }}" target="_blank">
                privacy & cookies
                policy</a>
            </span>
          </label>
          @error('policy')
          <div class="msg msg-danger msg-policy">{{ $message }}</div>
          @enderror
        </div>

        {{-- Submit --}}
        <div class="row submit-wrapper">
          <button type="submit">SEND ESTIMATE REQUEST</button>
        </div>

      </form>

    </div>

  </div>

  </div>

</section>


{{-- Contact Us Section --}}
@include('layouts.partials.contactus')

@endsection
