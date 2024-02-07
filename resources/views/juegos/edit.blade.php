@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <h2>Editar Juegos </h2>
       <hr>
      <form action="{{ route('juegos.update', $juegos->id) }}" method="post" enctype="multipart/form-data" class="col-lg-7">

        @csrf
        @method('PUT')
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
               <label for="titulojuego">Titulo del Juego</label>
               <input type="text" class="form-control" id="titulojuego" name="titulojuego" value="{{$juegos->titulojuego}}" />
           </div>
           <div class="form-group">
               <label for="plataforma">Plataforma</label>
               <textarea class="form-control" id="plataforma" name="plataforma">{{$juegos->plataforma}}</textarea>
           </div>
           <div class="form-group">
               <label for="genero">Genero</label>
               <textarea class="form-control" id="genero" name="genero">{{$juegos->genero}}</textarea>
           </div>
           <div class="form-group">
               <label for="descripcion">Descripcion</label>
               <textarea class="form-control" id="descripcion" name="descripcion">{{$juegos->descripcion}}</textarea>
           </div>
           <button type="submit">Guardar cambios</button>
      </form>
   </div>
</div>
@endsection
