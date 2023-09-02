<div class="text-center">
    <a href="{{ route('artistic_projects.create') }}" class="btn btn-dark w-50">Nuevo proyecto artístico</a>
</div>

@if ($artistic_projects->isEmpty())
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
                <div  class="carousel slide carousel-fade pb-3">
                    <div class="carousel-inner">
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
            </div>

                <h5 class="card-title">{{ $artistic_project->title}}</h5>
                <p class="card-text">{{ $artistic_project->description}}</p>
               {{-- <a href="#" class="btn btn-dark" title="ver más"><i class="fa-solid fa-eye"></i></a>--}}
                <a href="{{  route('artistic_projects.edit', ['artistic_project' => $artistic_project->id]) }}" class="btn btn-dark" title="editar"><i class="fa-solid fa-pen-to-square"></i></a>
               
                <form method="POST" class="d-inline" action="{{  route('artistic_projects.destroy', ['artistic_project' => $artistic_project->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark" title="editar" id="destroyProject" ><i class="fa-solid fa-trash"></i></button>
                </form>
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