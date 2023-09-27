@extends('layouts.app')
@section('content')
<div class="container fadeInUp" id="artistic-{{$artistic_project->id}}"> 
<div class="card mb-5 bg-light fadeInUp" style="animation-delay:2ms;">
    <h1 class="text-center pt-5 custom-font">{{ $artistic_project->title}}</h1>
<div class="row align-items-center justify-content-center p-2">
    <div class="col-md-6 mx-auto" style="height: 600px; overflow: hidden; display: flex; align-items: center;">
        <p class="text-center">
            <div id="carousel{{$artistic_project->id}}" class="carousel slide">
                <div id="lightgallery{{ $artistic_project->id }}" class="carousel-inner">           
                @foreach ($artistic_project->images as $image)
                <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block w-100 card-img-top mx-auto rounded" src="{{ asset($image->path) }}" >
                    </div>         
                </a>
                @endforeach  
            </div>
            
            <button class="carousel-control-prev" data-bs-target="#carousel{{ $artistic_project->id }}" role="button" data-bs-slide="prev">
                <i class="fa-solid fa-arrow-left"></i> 
            </button>
           
            <button class="carousel-control-next" data-bs-target="#carousel{{ $artistic_project->id }}" role="button" data-bs-slide="next">
                <i class="fa-solid fa-arrow-right"></i> 
            </button>
           
        </p>
    </div>
</div>

    <div class="col-md-6 ">
        <p class="p-3 text-center">
                {!! nl2br(e($artistic_project->big_description)) !!}
        </p>  
        @if(!empty($artistic_project->link_video))
        <div class="text-center pb-3">
            <a  href="{{ $artistic_project->link_video }}" class="btn btn-dark" title="Ver video">VER VIDEO</a>
        </div>
        @endif
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery{{ $artistic_project->id }}'));   
</script>
@endsection