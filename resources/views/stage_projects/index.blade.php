@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="container">
        <h1 class="text-center pb-4">{{ __('Stage projects') }}</h1> 
        @if ($stage_projects->isEmpty())
        <div class="alert alert-warning mt-4">
            La lista de proyectos escénicos está vacía.
        </div>
        @else
        <!-- Stage Projects -->
        <div class="row">
            @foreach ($stage_projects as $stage_project)
            <div class="col-md-6 mb-4 mx-auto text-center">
                <a class="custom-link" href="{{ route('stage_projects.show', ['stage_project' => $stage_project->id]) }}" >
                    <div class="card fadeInUp">
                        <div class="row">
                            <div class="col-md-5 vertical-center">
                                @foreach ($stage_project->images as $image)
                                    @if ($loop->first)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img class="carousel-item {{ $loop->first ? 'active' : '' }} projects-img-index" src="{{ asset($image->path) }}" class="d-block" alt="{{ $stage_project->title }}"/>
                                        </div>
                                    @endif
                                @endforeach   
                            </div>
                            <div class="col-md-7" id="stage-{{$stage_project->id}}">
                                <div class="card-body">
                                    <h4 class="card-title text-center custom-font"><strong>{{ $stage_project->title }}</strong></h4>
                                    <p class="card-text text-center projects-p"><strong>{{ $stage_project->description }}</strong></p>
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
