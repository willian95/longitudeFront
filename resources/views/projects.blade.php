@extends('layouts.main')

@push('header')

    @include('partials.header_blue')
    @include('partials.loader')

@endpush

@section('content')

<style>
  .navbar-nav a {
    color: #000;
  }

  header {
    position: relative;
  }
</style>

<section class="main-services grid-section container-main">
  <div>
    <h2 data-aos="fade-right"
     data-aos-easing="linear"
     data-aos-duration="1500" class="title">PROYECTOS</h2>

  </div>
  <div class="grid-proyecto">

    @foreach(App\Models\Project::all() as $project)
      <a href="{{ url('/project/'.$project->id) }}" class="item">
        <div>

          <img src="{{ $project->image }}" alt="">
          <p>{{ $project->title }}</p>
          

        </div>
      </a>

    @endforeach

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
