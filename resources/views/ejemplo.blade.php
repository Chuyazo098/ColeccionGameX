<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <style>
       h1{
           text-align: center;
           text-transform: uppercase;
       }
       .contenido{
           font-size: 20px;
       }
       #primero{
           background-color: #ccc;
       }
       #segundo{
           color:#44a359;
       }
       #tercero{
           text-decoration:line-through;
       }
   </style>
</head>
<body>
<h1>PDF de la tabla de juegos</h1>
<hr>
<div class="contenido">
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Juego</th>
                <th scope="col">Plataforma</th>
                <th scope="col">Genero</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
@foreach($todosloscampos as $juego)
                <tr>
                    <th scope="row">{{ $juego->id }}</th>
                    <td>{{ $juego->titulojuego }}</td>
                    <td>{{ $juego->plataforma }}</td>
                    <td>{{ $juego->genero }}</td>
                    <td>{{ $juego->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
