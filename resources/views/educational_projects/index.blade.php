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
        @foreach ($educational_projects as $educational_project)
        <div class="card mb-3 mx-auto" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-5">
                    <div id="lightgallery{{ $educational_project->id }}" class="carousel-inner">           
                        @foreach ($educational_project->images as $image)
                        <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img class="d-block w-100 card-img-top" src="{{ asset($image->path) }}" >
                            </div>
                        </a>
                        @endforeach   
                    </div>         
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>{{ $educational_project->title }}</strong></h5>
                        <p class="card-text text-center"><strong>{{ $educational_project->description }}</strong></p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
    <script type="text/javascript">
        @foreach ($educational_projects as $educational_project)
        lightGallery(document.getElementById('lightgallery{{ $educational_project->id }}'));   
        @endforeach
    </script>
    @endif
</div>
@endsection
