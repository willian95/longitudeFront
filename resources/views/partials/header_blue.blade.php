<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LONGITTUDE</title>
  <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('/assets/css/custom.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="{{ url('/assets/css/responsive.css') }}">

  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ url('/assets/css/animate.min.css') }}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-fixed-js">
      <div class="container flex-content">
        <a class="brand brand-xs" href="{{ url('/') }}">
          <img alt="" src="{{ url('/assets/img/logo_blue.svg') }}" />
        </a>
        <button class="
              navbar-toggler
              p-2
              border-0
              hamburger hamburger--elastic
              d-none-lg
            " data-toggle="offcanvas" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="offcanvas-collapse fil" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item mr-5 text-right">
              <a data-aos="fade-down"
              data-aos-easing="linear"
              data-aos-duration="3000" href="#" style="color: #000; cursor: pointer;" class="nav-link nav-link-black" data-toggle="modal" data-target=".reel" >
                REEL</a>
            </li>
            <li class="nav-item mr-5 text-right">
              <a data-aos="fade-down"
              data-aos-easing="linear"
              data-aos-duration="3000" class="nav-link nav-link-black" href="{{ route('services') }}">
                SERVICIOS</a>
            </li>
            <li class="nav-item mr-5 text-right">
              <a data-aos="fade-down"
              data-aos-easing="linear"
              data-aos-duration="2500" class="nav-link nav-link-black" href="{{ route('projects') }}">
                PROYECTOS</a>
            </li>
            <li class="nav-item mr-5 text-right">
              <a data-aos="fade-down"
              data-aos-easing="linear"
              data-aos-duration="1000" class="nav-link nav-link-black" href="{{ route('contact') }}">
                CONTACTO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

