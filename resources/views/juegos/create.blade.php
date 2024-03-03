@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <h2>Agregar un nuevo video juego</h2>
       <head>
        <!-- Otros enlaces -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        </head>

       <a href="{{ route('home') }}" class="btn btn-transparent btn-border-black">Regresar a Home</a>
       <hr>
       <form action="{{ route('juegos.store') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
           @csrf <!-- Protección contra ataques ya implementado en laravel  https://www.welivesecurity.com/la-es/2015/04/21/vulnerabilidad-cross-site-request-forgery-csrf/-->
           @if($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach($errors->all() as $error)
                           <li>{{$error}}</li>
                       @endforeach
                   </ul>
               </div>
           @endif


           <div class="form-group">
               <label for="titulojuego">Titulo de Juego.</label>
               <input type="text" class="form-control" id="titulojuego" name="titulojuego" value="{{old('titulojuego')}}" />
           </div>
           <div class="form-group">
               <label for="plataforma">Plataforma</label>
               <textarea class="form-control" id="plataforma" name="plataforma">{{old('plataforma')}}</textarea>
           </div>
           <div class="form-group">
               <label for="genero">Genero.</label>
               <textarea class="form-control" id="genero" name="genero">{{old('genero')}}</textarea>
           </div>
           <div class="form-group">
               <label for="descripcion">Descripcion</label>
               <textarea class="form-control" id="descripcion" name="descripcion">{{old('descripcion')}}</textarea>
           </div>
           <br>
           <button type="submit" class="btn btn-success">Guardar Juego</button>
       </form>
   </div>
</div>
@endsection
