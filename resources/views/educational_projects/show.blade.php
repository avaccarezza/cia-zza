@extends('layouts.app')
@section('content')
<div class="container fadeInUp" id="educational-{{$educational_project->id}}"> 
<div class="card mb-5 bg-light fadeInUp" style="animation-delay:2ms;">
    <h1 class="text-center pt-5 custom-font">{{ $educational_project->title}}</h1>
<div class="row align-items-center justify-content-center p-2">
    <div class="col-md-6 mx-auto">
        <p class="text-center">
            <div id="lightgallery{{ $educational_project->id }}" class="carousel-inner">           
                @foreach ($educational_project->images as $image)
                <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block w-100 card-img-top mx-auto" src="{{ asset($image->path) }}" style="max-width:500px;">
                    </div>
                </a>
                @endforeach   
            </div>         
        </p>
    </div>
    <div class="col-md-6 ">
        <p class="p-3 text-center">
            {!! nl2br(e($educational_project->big_description)) !!}
        </p>  
        @if(!empty($educational_project->link_video))
        <div class="text-center pb-3">
            <a  href="{{ $educational_project->link_video }}" class="btn btn-dark" title="Ver video">VER VIDEO</a>
        </div>
        @endif
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery{{ $educational_project->id }}'));   
</script>
@endsection