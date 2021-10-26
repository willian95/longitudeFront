@extends('layouts.main')

@push('header')

    @include('partials.header_blue')
    @include('partials.loader')

@endpush

@section('content')

<style>
  .navbar-nav a {
    color: #000;

    font-weight: 600;

  }

  header {
    position: relative;
  }
</style>

<section class="main-services grid-section container-main">
  <div>
    <h2 data-aos="fade-right"
     data-aos-easing="linear"
     data-aos-duration="1500" class="title">SERVICIOS</h2>
    <p data-aos="fade-right"
     data-aos-easing="linear"
     data-aos-duration="2500" class="parraf">Somos un estudio de diseño
      con arquitectos especializados
      en visualización urbanística,
      pasajística y arquitectónica.
      Buscamos plasmar la realidad
      futura con una variedad de
      opciones visuales, expresando
      composición, ambiente y
      contenido, comprometiéndonos
      siempre a desarrollar trabajos
      con un altísimo nivel de detalle
      y calidad, con un portafolio
      que comprende imágenes fijas,
      animaciones y realidad virtual.</p>
  </div>
  <div class="grid grid-main">
    <a href="{{ url('service/1') }}" class="item" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="2100">
      <div>

        <img src="{{ App\Models\Service::find(1)->image }}" alt="">
        <p>{{ App\Models\Service::find(1)->title }}</p>

      </div>
    </a>
    <a href="{{ url('service/2') }}" class="item" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="2200">
      <div>
        <img src="{{ App\Models\Service::find(2)->image }}" alt="">
        <p> {{ App\Models\Service::find(2)->title }}</p>
      </div>
    </a>
    <a href="{{ url('service/3') }}" class="item" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="2100">
      <div>
        <img src="{{ App\Models\Service::find(3)->image }}" alt="">
        <p> {{ App\Models\Service::find(3)->title }} </p>
      </div>
    </a>
    {{--<a href="{{ url('service/4') }}" class="item" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="2100">
      <div>
        <img src="{{ App\Models\Service::find(4)->image }}" alt="">
        <p> {{ App\Models\Service::find(4)->title }} </p>
      </div>
    </a>--}}
    <a href="{{ url('service/5') }}" class="item" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="2100">
      <div>
        <img src="{{ App\Models\Service::find(5)->image }}" alt="">
        <p>{{ App\Models\Service::find(5)->title }}</p>
      </div>
    </a>
    <a href="{{ url('service/6') }}" class="item" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="2100">
      <div>

        <img src="{{ App\Models\Service::find(6)->image }}" alt="">
        <p>{{ App\Models\Service::find(6)->title }}</p>

      </div>
    </a>
    <a href="{{ url('service/7') }}" class="item" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="2100">
      <div>

        <img src="{{ App\Models\Service::find(7)->image }}" alt="">
        <p>{{ App\Models\Service::find(7)->title }}
        </p>

      </div>
    </a>
  </div>

  <style>
    footer a,
    footer i {
      color: #112129;
    }

    footer div {
      position: relative;
      margin-top: 2rem;
      left: 50%;
    }
    .hamburger-inner,.hamburger-inner::before, .hamburger-inner::after {

    background-color: #124f8b;
    }
  </style>
</section>

@endsection

@push('footer')

    @include('partials.footer')

@endpush
