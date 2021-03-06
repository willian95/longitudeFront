@extends("layouts.main")

@push("header")

    @include("partials.header_blue")
    @include("partials.loader")

@endpush


@section("content")
<style>
  .navbar-nav a {
    color: #000;
  }

  header {
    position: relative;
  }
</style>

<section class="main-services grid-section container-main ">
  <div>
    <h2 data-aos="fade-right"
     data-aos-easing="linear"
     data-aos-duration="1500" class="title">{{ $service->title }}</h2>
    <p class="parraf">{!! $service->description !!}
    </p>
  </div>

  @if($service->fileAmount == 1)
    <div class="grid grid-main grid-details iframe--alto">

        @foreach($files as $serviceFile)

            <div class="item" data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="2100">

                @if($serviceFile->type == 'png' || $serviceFile->type == 'jpg')
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="{{ $serviceFile->file }}" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <img src="{{ $serviceFile->file }}" itemprop="thumbnail" alt="Image description" class="w-100">
                        </a>
                        {{--<p>Zenith</p>--}}
                    </figure>

                @elseif($serviceFile->type == 'mp4')

                    <video controls class="w-100">
                        <source src="{{ $serviceFile->file }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                @elseif($serviceFile->type == 'zip')

                    <iframe
                        src="{{ $serviceFile->file }}"  allowFullScreen="true">
                    </iframe>

                @elseif($serviceFile->type == '360')

                    <div class="embed360 w-100">
                        <img src="{{ $serviceFile->file }}" class="w-100" >
                    </div>

                @endif

            </div>

        @endforeach

    </div>

  @endif

  @if($service->fileAmount == 9 || $service->fileAmount == 6)
    <!-----------grid-3------------->
    <div class="grid grid-main grid-details gallery grid-3" id="gallery">
        @foreach($files as $serviceFile)

            <div class="item">

                @if($serviceFile->type == 'png' || $serviceFile->type == 'jpg')
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="{{ $serviceFile->file }}" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <img src="{{ $serviceFile->file }}" itemprop="thumbnail" alt="Image description" class="w-100" style="height: 50vh;">
                        </a>
                        {{--<p>Zenith</p>--}}
                    </figure>

                @elseif($serviceFile->type == 'mp4')

                    <video controls class="w-100" style="height: 50vh;">
                        <source src="{{ $serviceFile->file }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                @elseif($serviceFile->type == 'zip')

                    <iframe
                        src="{{ $serviceFile->file }}"  allowFullScreen="true" style="height: 35vh;">
                    </iframe>

                @elseif($serviceFile->type == '360')

                    <div class="embed360 w-100">
                        <img src="{{ $serviceFile->file }}" class="w-100" >
                    </div>

                @endif

            </div>

        @endforeach

    </div>
    @endif

    @if($service->fileAmount == 4)
    <!-----------grid-3------------->
    <div class="grid grid-main grid-details gallery grid-2" id="gallery">
        @foreach($files as $serviceFile)

            <div class="item">

                @if(strtoupper($serviceFile->type) == 'PNG' || strtoupper($serviceFile->type) == 'JPG')
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="{{ $serviceFile->file }}" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <img src="{{ $serviceFile->file }}" itemprop="thumbnail" alt="Image description" class="w-100">
                        </a>
                        {{--<p>Zenith</p>--}}
                    </figure>

                @elseif(strtoupper($serviceFile->type) == 'MP4')

                    <video controls class="w-100">
                        <source src="{{ $serviceFile->file }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                @elseif(strtoupper($serviceFile->type) == 'ZIP')


                        <iframe
                            src="{{ $serviceFile->file }}"  allowFullScreen="true">
                        </iframe>



                @elseif($serviceFile->type == '360')

                    <div class="embed360 w-100">
                        <img src="{{ $serviceFile->file }}" class="w-100" >
                    </div>

                @endif

            </div>

        @endforeach

    </div>
    @endif
</section>


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
    .grid-section {

        margin-bottom: 7rem;
    }

    @media (min-width: 1700px) and (max-width: 1900px){
        iframe {
            height: 500px;
        }
    }

    @media (min-width: 1900px) {
        iframe {
            height: 700px;
        }
    }


</style>

@endsection







@push('footer')

    @include('partials.footer')

@endpush
