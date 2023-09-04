@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="container">
        <h1 class="text-center pb-4">{{ __('messages.Educational-projects') }}</h1> 
        @if ($educational_projects->isEmpty())
        <div class="alert alert-warning mt-4">
            La lista de proyectos pedagógicos está vacía.
        </div>
        @else
        <!-- Educational Projects -->
        <div class="row">
            @foreach ($educational_projects as $educational_project)
            <div class="col-md-6 mb-4">
                <div class="card fadeInUp">
                    <div class="row g-0">
                        <div class="col-md-5" style="height: 250px; overflow: hidden; display: flex; align-items: center;background-color: black;">
                            <div id="carousel{{$educational_project->id}}" class="carousel slide">
                            <div id="lightgallery{{ $educational_project->id }}" class="carousel-inner">
                                @foreach ($educational_project->images as $image)
                                <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img class="d-block w-100 card-img-top mx-auto img-fluid" src="{{ asset($image->path) }}" alt="{{ $educational_project->title }}">
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" data-bs-target="#carousel{{ $educational_project->id }}" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" data-bs-target="#carousel{{ $educational_project->id }}" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                        <div class="col-md-7" id="educational-{{$educational_project->id}}">
                            <div class="card-body">
                                <h4 class="card-title text-center custom-font"><strong>{{ $educational_project->title }}</strong></h4>
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
