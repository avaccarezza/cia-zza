<div class="text-center">
    <a href="{{ route('artistic_projects.create') }}" class="btn btn-dark w-50">Nuevo proyecto artístico</a>
</div>

@empty ($artistic_projects)
        <div class="alert alert-warning mt-4">
            La lista de proyectos artísticos está vacía.
        </div>
@else

<div class="container">
    <div class="row">
    @foreach($artistic_projects as $artistic_project)
        <div class="col-md-6">
            <div class="card mt-4 mx-auto" style="width: 18rem;">
                <div class="card-body">
                <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                <h5 class="card-title">{{ $artistic_project->title}}</h5>
                <p class="card-text">{{ $artistic_project->description}}</p>
                <a href="#" class="btn btn-dark">Go</a>
                <a href="#" class="btn btn-dark">Go</a>
                <a href="#" class="btn btn-dark">Go</a>
            </div>
            </div>    
        </div>   
    @endforeach
    </div>
</div>

@endempty