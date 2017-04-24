<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <title>Chaffin Fence & Lawn</title>
        <link rel="icon" href="{{ url('./img/logoidea5.png') }}">
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
  <section class="about-middle">
    <h3 class="below-middle-text">
      Chaffin Fence & Lawn have been in business for over 6
      years in Murfreesboro, TN. They are fast becoming THE choice for residential homeowners. They not only deliver
      an amazing product and service as expected, but they go above and beyond to make sure you are completely satisfied.
      They know that happy clients are good for business. That is why they consistantly build their best every time.
    </h3>
    <div class="center"><a class="button hero-button" href="{{ url('tel:615-624-2400') }}">Call Now For Free Quote!</a></div>
  </section>

        <script src="/js/app.js"></script>

    </body>
</html>
