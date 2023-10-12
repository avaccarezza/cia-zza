@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="container">
        <h1 class="text-center pb-4">{{ __('Writings') }}</h1> 
        @if ($writings->isEmpty())
        <div class="alert alert-warning mt-4">
            La lista de escritos está vacía.
        </div>
        @else
        <!-- Writings -->
        <div class="row">
            @foreach ($writings as $writing)
            <div class="col-md-6 mb-4 mx-auto text-center">
                <a class="custom-link" href="{{ route('writings.show', ['writing' => $writing->id]) }}" >
                    <div class="card fadeInUp" >
                        <div class="row">
                            <div class="col-md-5 vertical-center">
                                @foreach ($writing->images as $image)
                                    @if ($loop->first)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img class="carousel-item {{ $loop->first ? 'active' : '' }} projects-img-index" src="{{ asset($image->path) }}" class="d-block" alt="{{ $writing->title }}"/>
                                        </div>
                                    @endif
                                @endforeach   
                            </div>
                            <div class="col-md-7" id="writing-{{$writing->id}}">
                                <div class="card-body">
                                    <h4 class="card-title text-center custom-font"><strong>{{ $writing->title }}</strong></h4>
                                    <p class="card-text text-center projects-p"><strong>{{ $writing->description }}</strong></p>
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
