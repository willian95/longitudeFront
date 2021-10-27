@extends('layouts.main')

@push('header')

    @include('partials.header')
    @include('partials.loader')

@endpush

@section('content')

    <style>
        footer{
            display: none;
        }
    </style>
    <section class="banner">
        <div class="video-player mb30">

            <video id="bgdvid" autoplay loop playsinline muted>
                <source src="{{ url('/assets/img/banner.mp4') }}#t=0.1" type="video/mp4">
                <source src="{{ url('/assets/img/banner.mp4') }}#t=0.1" type="video/ogg">

                Your browser does not support HTML5 video.
            </video>
           <!--- <div class="btn play-btn btn-base fa play active" id="play-pause-button">
                <button data-aos="zoom-out"   data-aos-easing="linear"
                data-aos-duration="2000" id="playv">
                    <div class="video-overlay-play"></div>
                </button>
            </div>--->

            <p data-aos="fade-up" data-aos-duration="2000">SOMOS ARQUITECTOS PLASMANDO LA
                REALIDAD FUTURA CON OPCIONES VISUALES
                QUE EXPRESAN COMPOSICIÓN,
                AMBIENTE Y CONTENIDO.</p>
        </div>
    </section>

@endsection

@push('footer')

    @include('partials.footer')

@endpush
