<div class="text-center">
    <a href="{{ route('educational_projects.create') }}" class="btn btn-dark w-50">Nuevo proyecto artístico</a>
</div>

@if ($educational_projects->isEmpty())
<div class="alert alert-warning mt-4">
    La lista de proyectos pedagógicos está vacía.
</div>
@else
<div class="container">
    <div class="row">
        
    @foreach($educational_projects as $educational_project)
        <div class="col-md-6">
            <div class="card mt-4 mx-auto" style="width: 18rem;">
                <div class="card-body">   
                <div  class="carousel slide carousel-fade pb-3">
                    <div class="carousel-inner">
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
            </div>

                <h5 class="card-title">{{ $educational_project->title}}</h5>
                <p class="card-text">{{ $educational_project->description}}</p>
               {{-- <a href="#" class="btn btn-dark" title="ver más"><i class="fa-solid fa-eye"></i></a>--}}
                <a href="{{  route('educational_projects.edit', ['educational_project' => $educational_project->id]) }}" class="btn btn-dark" title="editar"><i class="fa-solid fa-pen-to-square"></i></a>
               
                <form method="POST" class="d-inline" action="{{  route('educational_projects.destroy', ['educational_project' => $educational_project->id]) }}">
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
    @foreach ($educational_projects as $educational_project)
    lightGallery(document.getElementById('lightgallery{{ $educational_project->id }}'));   
    @endforeach
</script>
@endif