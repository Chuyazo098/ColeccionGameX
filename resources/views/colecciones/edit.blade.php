@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h2>Editar Coleccion</h2>
        <hr>
        <form action="{{ route('colecciones.update', $coleccion->id) }}" method="post" enctype="multipart/form-data" class="col-lg-7">
            @csrf
            @method('PUT') <!-- Método HTTP para la actualización -->

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
                <label for="juegos_id">ID del Juego</label>
                <textarea class="form-control" id="juegos_id" name="juego_id">{{$coleccion->juego_id}}</textarea>
            </div>


            <div class="form-group">
                <label for="calificacion">Calificacion</label>
                <textarea class="form-control" id="calificacion" name="calificacion">{{$coleccion->calificacion}}</textarea>
            </div>

            <div class="form-group">
                <label for="comentario">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario">{{$coleccion->comentario}}</textarea>
            </div>

            <div class="form-group">
                <label for="fechaadquisicion">Fecha de Adquisicion</label>
                <textarea type="date" class="form-control" id="fechaadquisicion" name="fechaadquisicion">{{$coleccion->fechaadquisicion}}</textarea>
            </div>
            
            <br>
            <button type="submit">Guardar cambios</button>
        </form>
    </div>
</div>
@endsection
