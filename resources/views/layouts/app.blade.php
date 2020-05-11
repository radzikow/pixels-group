<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('layouts.partials.head')
</head>

<body class="preload">

  @include('layouts.partials.loader')

  @include('layouts.partials.header')

  @yield('content')

  @include('layouts.partials.footer')

  @include('layouts.partials.footer-scripts')

</body>

</html>
