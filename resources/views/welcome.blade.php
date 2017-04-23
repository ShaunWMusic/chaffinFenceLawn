<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
          <a class="button hidden" id="displayLetstalk" href="{{ url('tel:615-624-2400') }}">Let's Talk</a>
        </div>
      </nav>
    </section>
    <section class="hero-image">
      <div class="overlay">
      <div class="contain">
        {{-- <h2 class="hero-text">Fences • Staining • Pressure Washing • Mowing & More</h2> --}}
        <h2 class="hero-text"><p>
          Est. Since 2011, <span class="bold-text">Chaffin Fence & Lawn</span> is fast becoming THE choice for residential homeowners in Murfreesboro, TN.
          If you want it done right and on time for less, then you have come to the right place!
        </h2>
        <a class="button hero-button" href="{{ url('tel:615-624-2400') }}">Call Now For Free Quote!</a>

      </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="grid">
          <div class="grid-item">
            <a href="{{url('/casestudies')}}"><img class="img-grid"  src="{{ url('./img/IMG_2641.JPG')}}" alt=""></a>
          </div>
          <div class="grid-item">
            <a href="{{url('/casestudies')}}">  <img  class="img-grid" src="{{ url('./img/IMG_2640.JPG')}}" alt=""></a>
          </div>
          <div class="grid-item">
            <a href="{{url('/casestudies')}}">  <img  class="img-grid" src="{{ url('./img/IMG_2643.JPG')}}" alt=""></a>
          </div>
        </div>
      </div>
    </section>
    <section>
    <div class="contain">
      {{-- <h2 class="middle-text"><p>
        Est. Since 2011, <span class="bold-text">Chaffin Fence & Lawn</span> is fast becoming THE choice for residential homeowners in Murfreesboro, TN.
        If you want it done right and on time, call them today for a free quote!
      </h2> --}}
      <h2 class="middle-text">Fences • Staining • Pressure Washing • Mowing & More</h2>
      <a class="button hero-button" href="{{ url('tel:615-624-2400') }}">Call Now For Free Quote!</a>
    </div>
  </section>
  <section class="below-middle">
    <h3 class="below-middle-text">
      Tired of seeing your neighbors while enjoying your backyard? Tired of not having any privacy?
    </h3>
  </section>
  <section class="bottom">
    <h3 class="bottom-text">
      Chaffin Fence & Lawn can help. We provide top notch services for less, so you can finally have the comfort
       you deserve.
    </h3>
</section>
        <script src="/js/app.js"></script>

    </body>
</html>
