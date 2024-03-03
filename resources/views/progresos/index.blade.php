@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tabla de progresos registrados</h1>
           <head>
                <!-- Otros enlaces -->
                <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            </head>

                <a href="{{ route('home') }}" class="btn btn-transparent btn-border-black">Regresar a Home</a>
       
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">Horas Jugadas</th>
                    <th scope="col">Logros</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $progreso)
                    @if($progreso->status == 'active')
                        <tr>
                            <th scope="row">{{ $progreso->id }}</th>
                            <td>{{ $progreso->porcentajecompleto }}</td>
                            <td>{{ $progreso->horasjugadas }}</td>
                            <td>{{ $progreso->logrosdesbloqueados }}</td>
                            <td>
                                <a href="{{ route('progresos.edit', $progreso->id) }}" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('progresos.destroy', $progreso->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este progreso?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
