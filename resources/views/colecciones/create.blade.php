@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Agregar un nuevo videojuego a la colección</h2>
            <hr>
            <form action="{{ route('colecciones.store') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
                @csrf
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
                    <label for="juego_id">ID Juego</label>
                    <input type="number" class="form-control" id="juego_id" name="juego_id" value="{{ old('juego_id') }}">
                </div>

                <div class="form-group">
                    <label for="calificacion">Calificación</label>
                    <input type="text" class="form-control" id="calificacion" name="calificacion" value="{{ old('calificacion') }}">
                </div>

                <div class="form-group">
                    <label for="comentario">Comentario</label>
                    <textarea class="form-control" id="comentario" name="comentario">{{old('comentario')}}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="fechaadquisicion">Fecha de Adquisición</label>
                    <input type="date" class="form-control" id="fechaadquisicion" name="fechaadquisicion" value="{{ old('fechaadquisicion') }}">
                </div>

                <br>
                <button type="submit" class="btn btn-success mt-3">Guardar Juego en la colección</button>
            </form>
        </div>
    </div>
@endsection
