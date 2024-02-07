@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <h2>Agregar un nuevo video juego</h2>
       <hr>
       <form action="{{ route('juegos.destroy') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
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

           <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de los juegos</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach($juegos as $juego)
        @if($juego->status == 'active')
            <tr>
                <td>{{ $juego->id }}</td>
                <td>{{ $juego->titulojuego }}</td>
                <td>
                    <a href="{{ route('juegos.edit', ['id' => $juego->id]) }}">Editar</a>
                    <form action="{{ route('juegos.destroy', ['id' => $juego->id]) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este juego?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endif
      @endforeach
    </tbody>

</table>           

@endsection
