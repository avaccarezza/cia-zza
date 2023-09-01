@extends('layouts.app')

@section('content')
<div class="container"> 
    <!-- Intro -->
    <div class="card mb-5 bg-light">
    <div class="row justify-content-center"> 
    <div class="col-md-6 d-flex align-items-center justify-content-center p-5">
        <p class="text-center">
                    Así es como empezamos
            <br>porque "así" denota determinación
            <br>ynotangenio es una fracción y no más.
            <br>Guido no puede ponerlo todo,
            <br>damos el primer paso
            <br>y no es tan genial.
        </p>
    </div>
    <div class="col-md-6">
        <p class="text-center fadeInUp"  style="animation-delay:0.2ms;">
            <img class="rounded" src="{{ asset('img/home/guido1.png') }}" alt="guido-1">
        </p>
    </div>
</div>
</div>
    <!-- Guido -->
    <div class="card mb-5 bg-light fadeInUp" style="animation-delay:0.2ms;">
        <h1 class="text-center py-3">GUIDO VACCAREZZA</h1>
    <div class="row align-items-center justify-content-center p-5">
        <div class="col-md-6 mx-auto">
            <p class="text-center">
            <img class="rounded" src="{{ asset('img/guido/guido2.png') }}" alt="guido-2">
            </p>
        </div>
        <div class="col-md-6 ">
            <p class="text-center">
                Un simple terrícola con infinidad de contradicciones, gracias a las cuales se animó a saltar al vacío de lo que significa la escena.
            </p>
            <p class="text-center">
                Estructuralmente malabarista, meticuloso con el juego de la gravedad pero por sobre todo autodidacta. Con una relación muy estrecha en cuanto al movimiento habiendo cruzado camino con varias técnicas de danza se centró en la mezcla de la danza contemporánea, la composición instantánea y el butoh.
            </p>    
            <p class="text-center">
                Co-Creador de FaseQiatra cia (FR), con la cual se presento “Maquinas y Chupetines” y “Please Do Something”, interprete en “Eleven” de Kitt Jhonson (DK).
            </p>   
            <p class="text-center">   
                Creador de Ynotangenio plataforma que dio nacimiento a su primer unipersonal “A quien corresponda” que luego tomaría formato libro con su homónimo (la escena se convirtió en texto) con la ilustración de FZ, Dirigió Pleroma espectáculo de la UNSAM focalización en artes circenses.               
            </p>    
            <p class="text-center">        
                Hoy se encuentra dirigiendo “Así es misma” con la interpretación de Micaela Mirelman y desarrollando su nuevo proyecto “Como todo, se va al carajo ( o puede irse)”.
            </p>
            <p class="text-center">
                Sigue desarrollando su faceta pedagógica dictando “metodología de la investigación” en la LACC licenciatura de artes circenses contemporáneas de Mexico y con seminarios intensivos “Babeas y eso es oro” y  “Malabar en Jaque”.
            </p>
        </div>
        </div>
    </div>
    <!-- Contact -->
  {{-- @include('components/contact-card');--}} 
</div>

@endsection
