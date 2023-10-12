@extends('layouts.app')
@section('content')

<!-- Carousel wrapper -->
<div class="container fadeInUp pt-5"> 
    <div class="card mb-5 bg-light fadeInUp" style="animation-delay:2ms;">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url()->previous() }}" class="btn btn-dark m-2">
                    <i class="fas fa-arrow-left"></i>
                </a>

                @if(!empty($writing->link_video))
                    <a  id="showVideo" class="btn btn-dark my-2 " title="Ver video">
                        <i class="fab fa-vimeo"></i>
                    </a>
                    <a  id="showImage" class="btn btn-dark" title="Ver imágenes">
                        <i class="fas fa-image"></i>
                    </a>
                @endif     
                @if(!empty($writing->link_instagram))  
                <a  class="btn btn-dark m-2" href="{{ $writing->link_instagram }}"
                target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                @endif
            </div>

            </div>
                <div class="row">
                    <div class="col-md-6">
        <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <div id="projects_image">
            <div class="carousel-indicators">
                @php
                    $maxIndicators = 10; // Cambia esto al número máximo deseado
                @endphp
                @foreach ($writing->images as $image)
                @if ($loop->index < $maxIndicators)
                <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="{{$loop->index}}"
                    class="{{ $loop->first ? 'active' : '' }}"
                    aria-current="true"
                    aria-label="Slide {{$loop->index}}"
                ></button>
                @endif
                @endforeach
            </div>

            <!-- Inner -->
            <div id="lightgallery" class="carousel-inner custom-gallery mt-3 ">
            <!-- Single item -->
            @foreach ($writing->images as $image)
                <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                    <img class="carousel-item {{ $loop->first ? 'active' : '' }} custom-img-show" src="{{ asset($image->path) }}" class="d-block" alt="{{ $writing->title }}"/>
                </a>
            @endforeach
            </div>
        
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
            <i class="fa-solid fa-arrow-left"></i> 
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                <i class="fa-solid fa-arrow-right"></i> 
            <span class="visually-hidden">Next</span>
            </button>
        </div>  
            <iframe id="projects_video" class="custom-gallery"  width="100%" height="500" src="{{ $writing->link_video }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" style="background-color: black;"></iframe> 
    </div>
    </div>
    <div class="col-md-6" id="artistic-{{$writing->id}}">
        <h1 class="text-center mt-3 custom-font" >{{ $writing->title}}</h1>
        <p class="p-3 text-left">
                {!! nl2br(e($writing->big_description)) !!}
        </p>  
    </div>
</div>
</div>
  


<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'));   
</script>
@endsection