<div class="text-center">
    <a href="{{ route('writings.create') }}" class="btn btn-dark w-50">Nuevo escrito</a>
</div>

@if ($writings->isEmpty())
<div class="alert alert-warning mt-4">
    La lista de escritos está vacía.
</div>
@else

<div class="container">
    <div class="row">  
    @foreach($writings as $writing)
        <div class="col-md-6">
            <div class="card mt-4 mx-auto" style="width: 18rem;">
                <div class="card-body">   
                <div  class="carousel slide carousel-fade pb-3">
                    <div class="carousel-inner">
                        <div id="lightgallery{{ $writing->id }}" class="carousel-inner">
                        @foreach ($writing->images as $image)
                            <a href="{{ asset($image->path) }}" data-lg-size="1600-2400">
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img class="d-block w-100 card-img-top" src="{{ asset($image->path) }}" >
                                </div>
                            </a>
                        @endforeach
                        </div>
                    </div>
                </div>

                <h5 class="card-title">{{ $writing->title}}</h5>
                <p class="card-text">{{ $writing->description}}</p>
                <a href="{{  route('writings.edit', ['writing' => $writing->id]) }}" class="btn btn-dark" title="editar"><i class="fa-solid fa-pen-to-square"></i></a>
               
                <form method="POST" class="d-inline" action="{{  route('writings.destroy', ['writing' => $writing->id]) }}">
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
    @foreach ($writings as $writing)
    lightGallery(document.getElementById('lightgallery{{ $writing->id }}'));   
    @endforeach
</script>
@endif