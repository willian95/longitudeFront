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
    <div class="grid grid-main grid-details">

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
                        src="{{ $serviceFile->file }}">
                    </iframe>

                @elseif($serviceFile->type == '360')

                    {!! $serviceFile->file !!}

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
                        src="{{ $serviceFile->file }}">
                    </iframe>
                
                @elseif($serviceFile->type == '360')

                    {!! $serviceFile->file !!}

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
                        src="{{ $serviceFile->file }}">
                    </iframe>

                @elseif($serviceFile->type == '360')

                    {!! $serviceFile->file !!}

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
  }
</style>

@endsection







@push('footer')

    @include('partials.footer')

@endpush