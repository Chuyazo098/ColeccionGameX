@extends('layouts.app')
@section('content')  



<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="{{ asset('imagenes/Fornite.jpeg') }}" alt="Descripción de la imagen" class="img-fluid" style="width: 1350px; height: 700px; object-fit: cover;">
<div class="container">
<div class="carousel-caption text-start">
<h1>Empieza a registrar tus logros!!!!.</h1>
<p class="opacity-75">Se necesita una cuenta para registrar logros de tus juegos.</p>
</div>
</div>
</div>
<div class="carousel-item">
<img src="{{ asset('imagenes/Halo.jpeg') }}" alt="Descripción de la imagen" class="img-fluid" style="width: 1350px; height: 700px; object-fit: cover;">
<div class="container">
<div class="carousel-caption">
<h1>Comenta sobre algun logro que tengas.</h1>
<p>Esto ayudara a que veas los juegos de diferente forma.</p>
</div>
</div>
</div>
<div class="carousel-item">
<img src="{{ asset('imagenes/mario.jpg') }}" alt="Descripción de la imagen" class="img-fluid" style="width: 1350px; height: 700px; object-fit: cover;">
<div class="container">
<div class="carousel-caption text-end">
<h1>Explora todos los juegos registrados disponibles.</h1>
<p>Estas listo para vivir una nueva aventura.</p>
</div>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Area de Registros y Evidencia') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location='{{ url('/juegos') }}'">Tabla de Juegos</button>
                    <button type="button" class="btn btn-secondary btn-lg" onclick="window.location='{{ route('createJuego') }}'">Nuevo Juego</button>
                    <br>
                    <br>
                    

                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location='{{ url('/progresos') }}'">Tabla de Progreso</button>
                    <button type="button" class="btn btn-secondary btn-lg" onclick="window.location='{{ route('createProgreso') }}'">Nuevo progreso</button>
                    <br>
                    <br>

                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location='{{ url('/colecciones') }}'">Tabla de Colecciones</button>
                    <button type="button" class="btn btn-secondary btn-lg" onclick="window.location='{{ route('createColeccion') }}'">Nueva Colección</button>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

