@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="container">
        <h1 class="text-center pb-4">{{ __('Educational projects') }}</h1> 
        @if ($educational_projects->isEmpty())
        <div class="alert alert-warning mt-4">
            La lista de proyectos pedagógicos está vacía.
        </div>
        @else
        <!-- Educational Projects -->
        <div class="row">
            @foreach ($educational_projects as $educational_project)
            <div class="col-md-6 mb-4 mx-auto text-center">
                <a class="custom-link" href="{{ route('educational_projects.show', ['educational_project' => $educational_project->id]) }}" >
                    <div class="card fadeInUp">
                        <div class="row">
                            <div class="col-md-5 vertical-center">
                                @foreach ($educational_project->images as $image)
                                    @if ($loop->first)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img class="carousel-item {{ $loop->first ? 'active' : '' }} projects-img-index" src="{{ asset($image->path) }}" class="d-block" alt="{{ $educational_project->title }}"/>
                                        </div>
                                    @endif
                                @endforeach   
                            </div>
                            <div class="col-md-7" id="educational-{{$educational_project->id}}">
                                <div class="card-body">
                                    <h4 class="card-title text-center custom-font"><strong>{{ $educational_project->title }}</strong></h4>
                                    <p class="card-text text-center projects-p"><strong>{{ $educational_project->description }}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
   
</div>
@endsection
