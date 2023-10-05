@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New writing') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route("writings.store") }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" >
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                      
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Mini descripción') }}</label>
                        
                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>{{ old('description') }}</textarea>
                        
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="big_description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                        
                            <div class="col-md-6">
                                <textarea id="big_description" class="form-control @error('big_description') is-invalid @enderror" name="big_description" required autocomplete="big_description" autofocus>{{ old('big_description') }}</textarea>
                        
                                @error('big_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Images') }}</label>
                        
                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" accept="image/*" name="images[]" class="form-control" multiple>
                                </div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="link_video" class="col-md-4 col-form-label text-md-end">{{ __('Link Video') }}</label>
                        
                            <div class="col-md-6">
                                <textarea id="link_video" class="form-control @error('link_video') is-invalid @enderror" name="link_video"  autocomplete="link_video" autofocus>{{ old('link_video') }}</textarea>
                        
                                @error('link_video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="link_instagram" class="col-md-4 col-form-label text-md-end">{{ __('Link Instagram') }}</label>
                        
                            <div class="col-md-6">
                                <textarea id="link_instagram" class="form-control @error('link_instagram') is-invalid @enderror" name="link_instagram"  autocomplete="link_instagram" autofocus>{{ old('link_instagram') }}</textarea>
                        
                                @error('link_instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
