@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="container">
        <h1 class="text-center pb-4">{{ __('messages.Artistic-projects') }}</h1> 
        @if ($artistic_projects->isEmpty())
        <div class="alert alert-warning mt-4">
            La lista de proyectos artísticos está vacía.
        </div>
        @else
        <!-- Artistic Projects -->
        <div class="row">
            @foreach ($artistic_projects as $artistic_project)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div id="lightgallery{{ $artistic_project->id }}" class="carousel-inner">           
                                @foreach ($artistic_project->images as $image)
                                <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img class="d-block w-100 card-img-top mx-auto img-fluid" src="{{ asset($image->path) }}" alt="{{ $artistic_project->title }}">
                                    </div>
                                </a>
                                @endforeach   
                            </div>         
                        </div>
                        <div class="col-md-7" id="artistic-{{$artistic_project->id}}">
                            <div class="card-body">
                                <h4 class="card-title text-center custom-font"><strong>{{ $artistic_project->title }}</strong></h4>
                                <p class="card-text text-center"><strong>{{ $artistic_project->description }}</strong></p>
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                                <div class="text-center">
                                    <a  href="{{ route('artistic_projects.show', ['artistic_project' => $artistic_project->id]) }}" class="btn btn-dark" title="Ver detalle"><i class="fa-solid fa-eye"></i></a>
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
        @foreach ($artistic_projects as $artistic_project)
        lightGallery(document.getElementById('lightgallery{{ $artistic_project->id }}'));   
        @endforeach
    </script>
</div>
@endsection
