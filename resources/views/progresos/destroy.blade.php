@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Eliminar un progreso</h2>
            <hr>
            <form action="{{ route('progresos.destroy', $progreso->id) }}" method="post" enctype="multipart/form-data" class="col-lg-7">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este progreso?')">Eliminar</button>
            </form>
        </div>
    </div>
@endsection
