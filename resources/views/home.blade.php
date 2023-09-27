@extends('layouts.app')

@section('content')
<div class="container fadeInUp"> 
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
                <p class="text-center">
                    <img class="img-fluid rounded img-mobile" src="{{ asset('img/home/guido1.png') }}" alt="guido-1">
                </p>
            </div>
        </div>
        <div id="guido-section"></div>
    </div>
    
    <!-- Guido -->
    <div  class="card mb-5 bg-light fadeInUp " style="animation-delay:2ms;">
        <div class="row align-items-center justify-content-center ">
            
            <div class="col-md-6 mt-4">
                <p class="text-center">
                    <img class="img-fluid rounded img-mobile" src="{{ asset('img/guido/guido2.png') }}" alt="guido-2">
                </p>
            </div>
            <div class="col-md-6 px-5 py-5">
                <h1 class="text-center py-3">GUIDO VACCAREZZA</h1>
                Un simple terrícola con infinidad de contradicciones, nace próximo a la primavera de 1990 pero aún en el invierno.
             <p>   Estructuralmente malabarista, meticuloso con el compromiso de la escena, pero por sobre todo autodidacta. Con una relación muy estrecha en cuanto al movimiento habiendo cruzado camino con varias técnicas de danza se centró en la mezcla de la danza contemporánea, la composición instantánea y el butoh.</p>
             <p>  Fué co-creador de Cía.FaseQiatra (2014-2017) con la cual se desarrollaron los espectáculos “Maquinas y Chupetines”, “Please Do Something” y “Con-Voy” que fueron presentados en diferentes festivales alrededor del mundo.</p>
             <p>  Creador de “Ynotangenio”, plataforma que dio nacimiento a su primer unipersonal “A quien corresponda” 2018/19, que años después en julio de 2020 toma forma de libro con su homónimo (la escena se convirtió en texto) con la ilustración de FZ y editados por Corazón de Perrx.</p>
             <p>   Dirigió “Pleroma” espectáculo de la UNSAM (Universidad Nacional de San Martín) focalización en artes circenses en el año 2017.</p>
             <p>   Dirigió “Liberosis” Espectáculo de LACC México (Licenciatura en artes circenses contemporáneas) que fue presentado en formato de calle dentro del marco del Festival por la Primavera CDMS 2023 y de sala en la sala Miguel Covarrubias y Karpa Demente.</p>
             <p>  Fue docente en LACC Cirko Demente periodo 2021 a 2023 dictando “metodología de la investigación” para 2do y 3er año,  “especialidad Malabares” para 3er año.</p>
             <p>  Hoy se encuentra dirigiendo/digiriendo “Así es misma” con la interpretación de Micaela Mirelman, “Proyecto Liebre” con la interpretación de Blas Nielsen, readaptando “a quien corresponda” con la interpretación de Facundo Gutierrez y su nueva creación “Mildocientostreinticuatro” con Blas Nielsen, Facundo Gutierrez y Diego Gonzales.</p>
             <p>  En paralelo sigue desarrollando su faceta pedagógica coordinando “Aliadxs de la gravedad” siendo docente dentro de la plataforma y a su vez dictando seminarios intensivos de manera independiente “Babeas y eso es oro” y  “Malabar en Jaque”.</p>
                
            </div>
        </div>
    </div>
    <!-- Contact -->
    {{-- @include('components/contact-card');--}}
</div>
@endsection
