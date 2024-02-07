@extends('layouts.app')
@section('content')  

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>

                    <a class="navbar-brand" id="cambiarVista_consoles" href="{{ url('/juegos') }}">Tabla de Juegos</a>
                    <br>
                    <a class="navbar-brand" id="cambiarVista_games" href="{{ url('/progresos') }}">Tabla de Progreso</a>
                    <br>
                    <a class="navbar-brand" id="cambiarVista_metadata" href="{{ url('/colecciones') }}">Tabla de Colecciones</a>
                    <br>

                    <a class="navbar-brand" id="cambiarVista_consoles" href="{{ route('createJuego') }}">Nuevo Juego</a>
                    <br>
                    <a class="navbar-brand" id="cambiarVista_games" href="{{ route('createProgreso') }}">Nuevo progreso</a>
                    <br>
                    <a class="navbar-brand" id="cambiarVista_metadata" href="{{ route('createColeccion') }}">Nueva Coleccion</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('imagenes/descargar (1).jpeg') }}" class="d-block w-100" alt="imagen 1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/descargar.jpeg') }}" class="d-block w-100" alt="igamen 2">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/images.jpeg') }}" class="d-block w-100" alt="imagen">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->


@endsection

