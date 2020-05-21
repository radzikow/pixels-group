<nav class="main-nav navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">

    {{-- Phone --}}
    <div class="navbar-phone">
      <a href="tel:+48690563222"><img src="/svg/phone.svg" alt="Call us"></a>
    </div>

    {{-- Logo --}}
    <a class="navbar-brand" href="{{ url('/') }}">
      <div class="nav-logo">
        <p class="logo-pixels">pi<span class="logo-x">x</span>els.<span class="logo-group">group</span>
          <p>
      </div>
    </a>

    {{-- Burger --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-burger"></span>
      <span class="navbar-burger"></span>
      <span class="navbar-burger"></span>
    </button>

    {{-- Collapse navbar --}}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      {{-- Links --}}
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/estimate') }}">Estimate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/cookies') }}">Privacy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
        </li>
      </ul>
    </div>

    {{-- Phone number --}}
    <div id="navbarPhoneNumber" class="navbar-phone-number">
      {{-- <img src="/svg/phone.svg" alt="Call us"> --}}
      <a style="text-transform: lowercase;" href="mailto:hello@pixels.group">hello@pixels.group</a>
    </div>

  </div>
</nav>
