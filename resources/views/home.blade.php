@extends('layouts.app')

@section('content')

{{-- Welcome Section --}}
<section class="welcome-section">
  <div class="container">
    <div class="row">

      <div class="col-md-6 welcome-text-wrapper hideElement">
        <h1 class="welcome-text">we are a <span class="welcome-text-bold">websites
            programming</span> company <br>
          with a passion for <span class="welcome-text-bold">pi<span class="welcome-text-color">x</span>els.</span></h1>
        <p class="additional-welcome-text">
          We are experts in creating modern and transparent websites.
          We know how important your website is to your company's image.
          This is almost always the first place your client will visit.
        </p>
      <a href="#services" class="welcome-button">CHECK OUR SERVICES</a>
      </div>

      <div class="col-md-6 welcome-image-wrapper hideElement">
        <img class="welcome-image" src="/svg/welcome.svg" alt="Welcome image">
      </div>

    </div>
  </div>
</section>

{{-- Why Us Section --}}
<section id="whyus" class="whyus-section">
  <div class="container">
    <div class="row whyus-wrapper">

      <div class="col text-center title-wrapper hideElement">
        <h2 class="section-title">Check why you should choose us</h2>
        <p class="section-additional-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.
        </p>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-4 whyus-image-wrapper hideElement">
        <img class="whyus-image" src="/svg/whyus.svg" alt="Welcome image">
      </div>

      <div class="col-lg-8 whyus-content-wrapper hideElement">
        <div class="row">
          <div class="col-md-6 whyus-content">
            <img src="/svg/check.svg" alt="Welcome image">
            <div class="whyus-content-text">
              <h3>Responsive layout</h3>
              <p>Lorem ipsum dolor sit amet,
                consectetur adipiscing elit,
                sed do eiusmod tempor
                incididunt ut labore.</p>
            </div>
          </div>
          <div class="col-md-6 whyus-content">
            <img src="/svg/check.svg" alt="Welcome image">
            <div class="whyus-content-text">
              <h3>Modern projects</h3>
              <p>Lorem ipsum dolor sit amet,
                consectetur adipiscing elit,
                sed do eiusmod tempor
                incididunt ut labore.</p>
            </div>
          </div>
          <div class="col-md-6 whyus-content">
            <img src="/svg/check.svg" alt="Welcome image">
            <div class="whyus-content-text">
              <h3>Modern projects</h3>
              <p>Lorem ipsum dolor sit amet,
                consectetur adipiscing elit,
                sed do eiusmod tempor
                incididunt ut labore.</p>
            </div>

          </div>
          <div class="col-md-6 whyus-content">
            <img src="/svg/check.svg" alt="Welcome image">
            <div class="whyus-content-text">
              <h3>Responsive layout</h3>
              <p>Lorem ipsum dolor sit amet,
                consectetur adipiscing elit,
                sed do eiusmod tempor
                incididunt ut labore.</p>
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>
</section>

{{-- Services Section --}}
<section id="services" class="services-section">
  <div class="container services-wrapper">

    <div class="row services-title-wrapper">
      <div class="col text-center title-wrapper hideElement">
        <h2 class="section-title">This is what we can do for you</h2>
        <p class="section-additional-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
      </div>
    </div>

    <div class="row services-content-wrapper">
      <div class="col-sm-6 col-lg-3 services-content hideElement">
        <img src="/svg/s1-blue.svg" alt="Desktop">
        <h3>Web design</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, obcaecati?</p>
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit.</li>
          <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
          <li>Lorem ipsum dolor sit amet consectetur.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-3 services-content hideElement">
        <img src="/svg/s2-blue.svg" alt="Blackboard">
        <h3>Modern websites</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, obcaecati?</p>
        <ul>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-3 services-content hideElement">
        <img src="/svg/s3-blue.svg" alt="Scrolls">
        <h3>Web applications</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, obcaecati?</p>
        <ul>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
        </ul>
      </div>
      <div class="col-sm-6 col-xl-3 services-content hideElement">
        <img src="/svg/s5-blue.svg" alt="Server">
        <h3>Hosting and domains
          management</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, obcaecati?</p>
        <ul>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
          <li>Lorem ipsum dolor amet</li>
        </ul>
      </div>

    </div>

  </div>
</section>

{{-- Get Estimate Section --}}
@include('layouts.partials.getestimate')

{{-- Our Work Section --}}
<section id="ourwork" class="ourwork-section">
  <div class="container ourwork-wrapper">

    <div class="row ourwork-title-wrapper">
      <div class="col text-center title-wrapper hideElement">
        <h2 class="section-title">Our work</h2>
        <p class="section-additional-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
      </div>
    </div>

    <div class="row ourwork-content-wrapper">

      <div class="col-12 ourwork-content">
        <div class="ourwork-content-image hideElement">
          <img src='{{url("/img/doctor.jpg")}}' alt="">
        </div>
        <div class="ourwork-content-info hideElement">
          <div class="info-branch">
            <p>PROPTECH / REAL ESTATES</p>
          </div>
          <h2 class="info-title">Vitamed Medical Clinic
            Website</h2>
          <p class="info-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorum vel accusantium nesciunt fugiat
            libero.
          </p>
          <div class="info-technologies">
            <p>Technologies:</p>
            <img src="/svg/javascript.svg" alt="Javascript">
            <img src="/svg/elixir.svg" alt="Elixir">
            <img src="/svg/angular.svg" alt="Angular">
          </div>
          <button class="info-button">
            See Online
          </button>
        </div>
        <div class="ourwork-content-notebook hideElement">
          <div class="notebook-image">
            <img class="notebook-image-laptop" src="/svg/laptop.svg" alt="Laptop">
            <img class="notebook-image-preview" src="/img/project1.png" alt="Project 1">
            <div class="image-layout"></div>
          </div>
        </div>
      </div>

      <div class="col-12 ourwork-content">
        <div class="ourwork-content-image hideElement">
          <img src='{{url("/img/doctor.jpg")}}' alt="">
        </div>
        <div class="ourwork-content-info hideElement">
          <div class="info-branch">
            <p>PROPTECH / REAL ESTATES</p>
          </div>
          <h2 class="info-title">Vitamed Medical Clinic
            Website</h2>
          <p class="info-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorum vel accusantium nesciunt fugiat
            libero.
          </p>
          <div class="info-technologies">
            <p>Technologies:</p>
            <img src="/svg/javascript.svg" alt="Javascript">
            <img src="/svg/elixir.svg" alt="Elixir">
            <img src="/svg/angular.svg" alt="Angular">
          </div>
          <button class="info-button">
            See Online
          </button>
        </div>
        <div class="ourwork-content-notebook hideElement">
          <div class="notebook-image">
            <img class="notebook-image-laptop" src="/svg/laptop.svg" alt="Laptop">
            <img class="notebook-image-preview" src="/img/project1.png" alt="Project 1">
          </div>
        </div>
      </div>

      <div class="col-12 ourwork-content">
        <div class="ourwork-content-image hideElement">
          <img src='{{url("/img/doctor.jpg")}}' alt="">
        </div>
        <div class="ourwork-content-info hideElement">
          <div class="info-branch">
            <p>PROPTECH / REAL ESTATES</p>
          </div>
          <h2 class="info-title">Vitamed Medical Clinic
            Website</h2>
          <p class="info-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorum vel accusantium nesciunt fugiat
            libero.
          </p>
          <div class="info-technologies">
            <p>Technologies:</p>
            <img src="/svg/javascript.svg" alt="Javascript">
            <img src="/svg/elixir.svg" alt="Elixir">
            <img src="/svg/angular.svg" alt="Angular">
          </div>
          <button class="info-button">
            See Online
          </button>
        </div>
        <div class="ourwork-content-notebook hideElement">
          <div class="notebook-image">
            <img class="notebook-image-laptop" src="/svg/laptop.svg" alt="Laptop">
            <img class="notebook-image-preview" src="/img/project1.png" alt="Project 1">
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

{{-- Testimonials Section --}}
<section id="testimonials" class="testimonials-section">
  <div class="container testimonials-wrapper">

    <div class="row testimonials-title-wrapper ">
      <div class="col text-center title-wrapper hideElement">
        <h2 class="section-title">Read what customers write about us</h2>
        <p class="section-additional-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
      </div>
    </div>

    <div class="row testimonials-content-wrapper">
      <div class="col-12 testimonials-sliders">

        {{-- <button class="slider-left-arrow">L</button>
        <button class="slider-right-arrow">R</button> --}}

        <div class="testimonials-slider testimonials-slider1">
          <div class="testimonials-slider-content">
            <div class="testimonials-content-icon">
              <img src="/svg/quote.svg" alt="Quote">
            </div>
            <div class="testimonials-content-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor Incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam,nostrud exercitation. Ut labore et dolore magna aliqua. Ut enim ad
                minim veniam,nostrud exercitation</p>
              <div>
                <img src="/svg/client.svg" alt="Client">
                <div>
                  <h3>Jonathan Doe</h3>
                  <p>UNICEF COMAPNY LTD.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonials-slider-overlay"></div>
        </div>

        <div class="testimonials-slider testimonials-slider2">
          <div class="testimonials-slider-content">
            <div class="testimonials-content-icon">
              <img src="/svg/quote.svg" alt="Quote">
            </div>
            <div class="testimonials-content-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor Incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam,nostrud exercitation. Ut labore et dolore magna aliqua. Ut enim ad
                minim veniam,nostrud exercitation</p>
              <div>
                <img src="/svg/client.svg" alt="Client">
                <div>
                  <h3>Jonathan Doe</h3>
                  <p>UNICEF COMAPNY LTD.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonials-slider-overlay"></div>
        </div>

        <div class="testimonials-slider testimonials-slider3">
          <div class="testimonials-slider-content">
            <div class="testimonials-content-icon">
              <img src="/svg/quote.svg" alt="Quote">
            </div>
            <div class="testimonials-content-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor Incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam,nostrud exercitation. Ut labore et dolore magna aliqua. Ut enim ad
                minim veniam,nostrud exercitation</p>
              <div>
                <img src="/svg/client.svg" alt="Client">
                <div>
                  <h3>Jonathan Doe</h3>
                  <p>UNICEF COMAPNY LTD.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonials-slider-overlay"></div>
        </div>

        <div class="testimonials-slider testimonials-slider3">
          <div class="testimonials-slider-content">
            <div class="testimonials-content-icon">
              <img src="/svg/quote.svg" alt="Quote">
            </div>
            <div class="testimonials-content-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor Incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam,nostrud exercitation. Ut labore et dolore magna aliqua. Ut enim ad
                minim veniam,nostrud exercitation</p>
              <div>
                <img src="/svg/client.svg" alt="Client">
                <div>
                  <h3>Jonathan Doe</h3>
                  <p>UNICEF COMAPNY LTD.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonials-slider-overlay"></div>
        </div>

        <div class="testimonials-slider testimonials-slider3">
          <div class="testimonials-slider-content">
            <div class="testimonials-content-icon">
              <img src="/svg/quote.svg" alt="Quote">
            </div>
            <div class="testimonials-content-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor Incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam,nostrud exercitation. Ut labore et dolore magna aliqua. Ut enim ad
                minim veniam,nostrud exercitation</p>
              <div>
                <img src="/svg/client.svg" alt="Client">
                <div>
                  <h3>Jonathan Doe</h3>
                  <p>UNICEF COMAPNY LTD.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonials-slider-overlay"></div>
        </div>

      </div>
    </div>

</section>

{{-- Articles Section --}}
<section id="articles" class="articles-section">

  <div class="container articles-wrapper">

    <div class="row articles-title-wrapper">
      <div class="col text-center title-wrapper hideElement">
        <h2 class="section-title">Featured articles</h2>
      </div>
    </div>

    <div class="row articles-content-wrapper">

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 article-wrapper hideElement">
        <div class="article-image article-image1">
          {{-- background image --}}
        </div>
        <div class="article-title">
          <h2>Lorem ipsum dolor sit amet dolore magna</h2>
        </div>
        <div class="article-text">
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore...</p>
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 article-wrapper hideElement">
        <div class="article-image article-image2">
          {{-- background image --}}
        </div>
        <div class="article-title">
          <h2>Lorem ipsum dolor sit amet dolore magna</h2>
        </div>
        <div class="article-text">
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore...</p>
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 article-wrapper hideElement">
        <div class="article-image article-image3">
          {{-- background image --}}
        </div>
        <div class="article-title">
          <h2>Lorem ipsum dolor sit amet dolore magna</h2>
        </div>
        <div class="article-text">
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore...</p>
        </div>
      </div>

    </div>

    <div class="row articles-button-wrapper">
    <a href="{{ url('/blog') }}" class="articles-button">See More Articles</a>
    </div>
  </div>
</section>

{{-- Contact Us Section --}}
@include('layouts.partials.contactus')

@endsection
