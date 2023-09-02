@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="container">
        <h1 class="text-center pb-4">{{ __('messages.Educational-projects') }}</h1> 
        @if ($educational_projects->isEmpty())
        <div class="alert alert-warning mt-4">
            La lista de proyectos artísticos está vacía.
        </div>
        @else
        <!-- Educational Projects -->
        <div class="row">
            @foreach ($educational_projects as $educational_project)
            <div class="col-md-6 mb-4">
                <div class="card" style="max-width: 700px; max-height: 200px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div id="lightgallery{{ $educational_project->id }}" class="carousel-inner">           
                                @foreach ($educational_project->images as $image)
                                <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img class="d-block w-100 card-img-top mx-auto" src="{{ asset($image->path) }}" style="max-width:200px;">
                                    </div>
                                </a>
                                @endforeach   
                            </div>         
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h4 class="card-title text-center"><strong>{{ $educational_project->title }}</strong></h4>
                                <p class="card-text text-center"><strong>{{ $educational_project->description }}</strong></p>
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                                <div class="text-center">
                                    <a  href="{{ route('educational_projects.show', ['educational_project' => $educational_project->id]) }}" class="btn btn-dark" title="Ver detalle"><i class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    <script type="text/javascript">
        @foreach ($educational_projects as $educational_project)
        lightGallery(document.getElementById('lightgallery{{ $educational_project->id }}'));   
        @endforeach
    </script>
</div>
@endsection
