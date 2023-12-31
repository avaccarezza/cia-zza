@extends('layouts.app')

@section('content')

<div class="container pt-5">
  @if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status') }}
  </div>
@endif
  <div class="row justify-content-center">
      <div class="col-md-8">  
          <div class="card ">
              <div class="card-header">{{ __('Stage projects') }}</div>
              <div class="card-body">  
                @include('panel.components.stage-projects-card')                                                     
              </div>
          </div>
      </div>
  </div>
</div>

<div class="container py-5">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card ">
              <div class="card-header">{{ __('Educational projects') }}</div>
              <div class="card-body">
                @include('panel.components.educational-projects-card')                                                                                                                          
              </div>
          </div>
      </div>
  </div>
</div>

<div class="container py-5">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card ">
              <div class="card-header">{{ __('Writings') }}</div>
              <div class="card-body">
                @include('panel.components.writings-card')                                                                                                                          
              </div>
          </div>
      </div>
  </div>
</div>


<!--Main layout-->

  {{-- @yield('content-panel') --}}

<!--Main layout-->


@endsection