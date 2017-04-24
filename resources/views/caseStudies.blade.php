<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <title>Chaffin Fence & Lawn</title>
    </head>
    <body>


      <section>
        {{-- desktop view --}}
        <nav class="desktop navbar">
          <h1 class="logo-header"><a href="{{ url('/') }}"><img src="{{ url('./img/logoidea5.png') }}" alt=""></a></h1>
          <div>
            <a class="navbar-link font-size" href="{{ url('/') }}">Home</a>
            <a class="navbar-link font-size" href="{{ url('/about') }}">About</a>
            <a class="navbar-link font-size" href="{{ url('/casestudies') }}">Gallery</a>
            <a class="navbar-link font-size" href="{{ url('tel:615-624-2400') }}">615-624-2400</a>
            <a class="button font-size" href="{{ url('tel:615-624-2400') }}">Let's Talk</a>
          </div>
        </nav>
        {{-- mobile view --}}
        <nav class="mobile navbar">
          <h1 class="logo-header"><a href="{{ url('/') }}"><img src="{{ url('./img/logoidea5.png') }}" alt=""></a></h1>
          <div class="mobile-dropdown">
            <img class="icon margin-top" id="nav" src="{{ url('./img/icons/menubar.png') }}" alt="">
            <a class="navbar-link hidden" id="displayHome" href="{{ url('/') }}">Home</a>
            <a class="navbar-link hidden" id="displayAbout" href="{{ url('/about') }}">About</a>
            <a class="navbar-link hidden" id="displayCasestudies" href="{{ url('/casestudies') }}">Gallery</a>
            <a class="navbar-link hidden" id="displayPhone" href="{{ url('tel:615-624-2400') }}">615-624-2400</a>
            <a class="navbar-link button hidden" id="displayLetstalk" href="{{ url('tel:615-624-2400') }}">Let's Talk</a>
          </div>
        </nav>
      </section>
      <section>
        <div class="contain-grid">
          <div class="grid">
            <div class="grid-item">
              <img class="grid-images" src="{{ url('./img/IMG_2640.JPG') }}" alt="">
            </div>
            <div class="grid-item">
              <img class="grid-images" src="{{ url('./img/IMG_2641.JPG') }}" alt="">
            </div>
            <div class="grid-item">
              <img class="grid-images" src="{{ url('./img/IMG_2643.JPG') }}" alt="">
            </div>
            <div class="grid-item">
              <img class="grid-images" src="{{ url('./img/IMG_2648.JPG') }}" alt="">
            </div>
            <div class="grid-item">
              <img class="grid-images" src="{{ url('./img/IMG_2649.JPG') }}" alt="">
            </div>
            <div class="grid-item">
              <img class="grid-images" src="{{ url('./img/IMG_2650.JPG') }}" alt="">
            </div>
            <div class="grid-item">
              <img class="grid-images" src="{{ url('./img/IMG_2651.JPG') }}" alt="">
            </div>
          </div>
        </div>
      </section>

        <script src="/js/app.js"></script>

    </body>
</html>
