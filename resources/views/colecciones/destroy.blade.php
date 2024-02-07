@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Eliminar Colección</h2>
        <hr>
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

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de los juegos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colecciones as $coleccion)
                    @if($coleccion->status == 'active')
                        <tr>
                            <td>{{ $coleccion->id }}</td>
                            <td>{{ $coleccion->titulojuego }}</td>
                            <td>
                                <a href="{{ route('colecciones.edit', ['coleccion' => $coleccion->id]) }}">Editar</a>
                                <form action="{{ route('colecciones.destroy', ['coleccion' => $coleccion->id]) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta coleccion?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
