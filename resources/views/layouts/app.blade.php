<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> @yield('title', 'Welcome') | ShopME </title>

    <link
      rel="stylesheet"
      href="//fonts.googleapis.com/css?family=Roboto:400,500"
    />
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} " />
    @yield('css')

    <script src=" {{ asset('js/uikit.js') }} "></script>
    <script src=" {{ asset('js/uikit-icons.js') }} "></script>
  </head>
  <body>
    <div class="uk-offcanvas-content">
        @extends('partials.header')

        @yield('content')
    </div>

    @yield('js')
    <script src=" {{ asset('js/script.js') }} "></script>
    {{-- <script
      src="//maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
      async
      defer
    ></script> --}}
  </body>
</html>
