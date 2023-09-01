
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>ARTISTIC </h1>
    
    @foreach ($artistic_projects as $artistic_project )

        <h2>{{ $artistic_project->title}}</h2>
        <h3>{{ $artistic_project->description}}</h3>
        <h4>{{ $artistic_project->id}}</h4>
    @endforeach
</div>
@endsection