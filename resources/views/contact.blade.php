@extends('layouts.main')

@push('header')

    @include('partials.header_blue')
    @include('partials.loader')

@endpush

@section('content')

<div class="contact" >
<video class="video-contact" autoplay loop playsinline muted>
                <source src="{{ url('/assets/img/contactvideo.mp4') }}" type="video/mp4">
                <source src="{{ url('/assets/img/contactvideo.mp4') }}" type="video/ogg">
                Your browser does not support HTML5 video.
            </video>
  <div class="contact-item">


    <div class="row">

      <div class="col-md-6">
        <p>CONTÁCTANOS</p>
        <form action="">
          <input type="text" placeholder="Nombre">
          <input type="text" placeholder="Correo eletrónico:">
          <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje:
"></textarea>

          <div class="text-md-right">
            <button class="btns">Enviar</button>
          </div>
        </form>
      </div>
      <div class="col-md-6 mt-5 pt-4">
        <p>DIRECCIÓN</p>
        <p class="mb-0">Cra.4 #13-14 Piso 4 Ed.Davivienda</p>
        <p class="mb-0"> Santa Marta -Colombia</p>
        <p class="mb-0"> Telefóno:</p>
        <a class="" href="tel:   (+57) 300 8396357"> (+57) 300 8396357</a> <br> <br>
        <a href="mailto: m.cadavid@longittude.co">e-mail: m.cadavid@longittude.co</a>
      </div>
    </div>
  </div>
</div>

@endsection

@push('footer')

    @include('partials.footer')

@endpush
