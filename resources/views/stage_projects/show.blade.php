@extends('layouts.app')
@section('content')

<!-- Carousel wrapper -->
<div class="container fadeInUp pt-5"> 
    <div class="card mb-5 bg-light fadeInUp" style="animation-delay:2ms;">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ url()->previous() }}" class="btn btn-dark m-2">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
            <div class="col-md-6">
                <h1 class="text-center mt-3 custom-font" >{{ $stage_project->title}}</h1>
            </div>
        </div>
        <div class="row">
           <div class="col-12 col-lg-6">
        <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <div id="projects_image">
            <div class="carousel-indicators">
                @php
                    $maxIndicators = 10; // Cambia esto al número máximo deseado
                @endphp
                @foreach ($stage_project->images as $image)
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
            @foreach ($stage_project->images as $image)
                <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                    <img class="carousel-item {{ $loop->first ? 'active' : '' }} custom-img-show" src="{{ asset($image->path) }}" class="d-block" alt="{{ $stage_project->title }}"/>
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
    </div>
    </div>
    <div class="col-12 col-lg-6" id="stage-{{$stage_project->id}}">
      
        <p class="p-3 text-left">
                {!! nl2br(e($stage_project->big_description)) !!}
        </p>
        <div class="text-center p-3">
            @if(!empty($stage_project->link_video))
                    <a class="btn btn-primary" style="background-color: #55acee;" href="{{ $stage_project->link_video }}" target="_blank" role="button">
                        <i class="fab fa-vimeo-v"></i>
                    </a>  
                @endif     
                @if(!empty($stage_project->link_instagram))  
                <a class="btn btn-primary" style="background-color: #ac2bac;" href="{{ $stage_project->link_instagram}}" target="_blank"role="button"
                ><i class="fab fa-instagram"></i
              ></a>
                @endif
        </div>  
    </div>
</div>
</div>



<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'));   
</script>
@endsection