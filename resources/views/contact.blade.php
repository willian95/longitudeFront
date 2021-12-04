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
          <form>
          <input type="text" placeholder="Nombre" id="name-message">
          <input type="text" placeholder="Correo eletrónico:" id="email-message">
          <textarea name="" id="message-message" cols="30" rows="10" placeholder="Mensaje:" ></textarea>

          <div class="text-md-right">
            <button type="button" id="buttonSendMessage" class="btns"  onclick="sendMessage()">Enviar</button>
          </div>
          </form>

          <div id="spinner" style="display:none">
            Enviando...
        </div>
        <div class="col-md-12 text-center">
          <div class="cf-msg"></div>
        </div>
    
      </div>
      <div class="col-md-6 mt-5 pt-4">
        <p>DIRECCIÓN</p>
        <p class="mb-0">Cra.4 #13-14 Piso 4 Ed.Davivienda</p>
        <p class="mb-0"> Santa Marta -Colombia</p>
        <p class="mb-0"> Telefóno:</p>
        <a class="" href="tel:   (+57) 300 8396357"> (+57) 300 8396357</a> <br> <br>
        <a href="mailto: comercial@longittude.co">e-mail: comercial@longittude.co</a>
      </div>
    </div>
  </div>
</div>

<script>
        function sendMessage() {

            let email = $("#email-message").val()
            let name = $("#name-message").val()
            let message = $("#message-message").val()

            $("#buttonSendMessage").css("display", "none")
            $("#spinner").css("display", "block")

            $.post("{{ url('/send/message') }}", {
            "email": email,
            "name": name,
            "text": message,
            "_token": "{{ csrf_token() }}"
            }, function(data) {

            $("#buttonSendMessage").css("display", "block")
            $("#spinner").css("display", "none")

            $("#email-message").val("")
            $("#name-message").val("")
            $("#message-message").val("")

            swal({
                icon: "success",
                text: "Mensaje enviado"
            })

            })

        }
    </script>

@endsection

@push('footer')

    @include('partials.footer')

@endpush
