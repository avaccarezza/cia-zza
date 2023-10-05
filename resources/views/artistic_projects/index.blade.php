@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="container">
        <h1 class="text-center pb-4">{{ __('Artistic projects') }}</h1> 
        @if ($artistic_projects->isEmpty())
        <div class="alert alert-warning mt-4">
            La lista de proyectos artísticos está vacía.
        </div>
        @else
        <!-- Artistic Projects -->
        <div class="row">
            @foreach ($artistic_projects as $artistic_project)
            <div class="col-md-6 mb-4">
                <a class="custom-link" href="{{ route('artistic_projects.show', ['artistic_project' => $artistic_project->id]) }}" >
                <div class="card fadeInUp">
                    <div class="row">
                        <div class="col-md-5 projects-img-index" >
                                @foreach ($artistic_project->images as $image)
                                    @if ($loop->first)
                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                <img class="carousel-item {{ $loop->first ? 'active' : '' }} custom-img-index" src="{{ asset($image->path) }}" class="d-block" alt="{{ $artistic_project->title }}"/>
                                            </div>
                                    @endif
                                @endforeach   
                        </div>
                        <div class="col-md-7" id="artistic-{{$artistic_project->id}}">
                            <div class="card-body">
                                <h4 class="card-title text-center custom-font"><strong>{{ $artistic_project->title }}</strong></h4>
                                <p class="card-text text-center projects-p"><strong>{{ $artistic_project->description }}</strong></p>
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
