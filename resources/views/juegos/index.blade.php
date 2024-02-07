@extends('layouts.app')
@section('content')
    <h1>Tabla de juegos registrados.</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo Del Juego</th>
                <th scope="col">Plataforma</th>
                <th scope="col">Genero</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($juegos as $juego)
                <tr>
                    <th scope="row">{{ $juego->id }}</th>
                    <td>{{ $juego->titulojuego }}</td>
                    <td>{{ $juego->plataforma }}</td>
                    <td>{{ $juego->genero }}</td>
                    <td>{{ $juego->descripcion }}</td>
                    <td>
                        <a href="{{ route('juegos.edit', ['juego' => $juego->id]) }}" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                    <form action="{{ route('juegos.destroy', $juego->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este juego?')">Eliminar</button>
                            </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
