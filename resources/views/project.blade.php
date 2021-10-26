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
     data-aos-duration="1500" class="title">{{ $project->title }}</h2>
    {{--<p class="parraf">
      Video <br>
      Renders 2D
    </p>--}}
  </div>

  <!-----------grid-2------------->
 <div id="gallery" class=" gallery">

 <div class="grid grid-main grid-details" >
    <div class="item">

        @if($project->type == 'png' || $project->type == 'jpg')
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{ $project->file }}" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <img src="{{ $project->file }}" itemprop="thumbnail" alt="Image description" class="w-100">
                </a>
                {{--<p>Zenith</p>--}}
            </figure>

        @elseif($project->type == 'mp4')

            <video controls class="w-100">
                <source src="{{ $project->file }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        @elseif($project->type == 'zip')

            <iframe
                src="{{ $project->file }}" class="w-100" style="min-height: 400px"  allowFullScreen="true">
            </iframe>

        @endif

    </div>
  </div>




  <div class="grid grid-main grid-details gallery grid-3" >
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
                    src="{{ $serviceFile->file }}" class="w-100"  allowFullScreen="true">
                </iframe>

            @endif

        </div>

        @endforeach


  </div>
 </div>

</section>
<style>
     footer div {
        position: relative;
    margin-top: 2rem;
    left: 50%;
    }
    footer a, footer i {
    color: #112129;
    margin: 2px;
</style>
@endsection


@push('footer')

    @include('partials.footer')

@endpush
