@extends('layouts.app')

@section('content')
    <h1>Tabla de Colecciones registradas.</h1>
    <head>
        <!-- Otros enlaces -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        </head>

       <a href="{{ route('home') }}" class="btn btn-transparent btn-border-black">Regresar a Home</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID Usuario</th>
                <th scope="col">Titulo Juego</th>
                <th scope="col">Calificación</th>
                <th scope="col">Comentario</th>
                <th scope="col">Fecha de Adquisición</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colecciones as $coleccion)
                @if($coleccion->status == 'active')
                    <tr>
                        <th scope="row">{{ $coleccion->id }}</th>
                        <td>{{ optional($coleccion->user)->id }}</td>
                        <td>{{ $coleccion->juego_id }}</td>
                        <td>{{ $coleccion->calificacion }}</td>
                        <td>{{ $coleccion->comentario }}</td>
                        <td>{{ $coleccion->fechaadquisicion }}</td>
                        <td>
                            <a href="{{ route('colecciones.edit', ['coleccion' => $coleccion->id]) }}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('colecciones.destroy', $coleccion->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta colección?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

    <!-- Agrega la paginación al final de la tabla -->
    {{ $colecciones->links() }}
@endsection
