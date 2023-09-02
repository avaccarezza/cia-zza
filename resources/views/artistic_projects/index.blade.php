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
        @foreach ($artistic_projects as $artistic_project)
        <div class="card mb-3 mx-auto" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-5">
                    <div id="lightgallery{{ $artistic_project->id }}" class="carousel-inner">           
                        @foreach ($artistic_project->images as $image)
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
                        <h5 class="card-title text-center"><strong>{{ $artistic_project->title }}</strong></h5>
                        <p class="card-text text-center"><strong>{{ $artistic_project->description }}</strong></p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
    <script type="text/javascript">
        @foreach ($artistic_projects as $artistic_project)
        lightGallery(document.getElementById('lightgallery{{ $artistic_project->id }}'));   
        @endforeach
    </script>
    @endif
</div>
@endsection
