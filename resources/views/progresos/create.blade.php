@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Agregar un nuevo progreso</h2>
            <hr>
            <form action="{{ route('progresos.store') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Agregando el campo oculto para coleccion_id -->
                <input type="hidden" name="colecciones_id" value="{{ Auth::id() }}">


                <!-- Agregar la sección del menú desplegable para seleccionar colecciones -->
                <div class="form-group">
    <label for="coleccion_id">Colección</label>
    <select class="form-control" id="colecciones_id" name="colecciones_id">
        @foreach($colecciones as $coleccion)
            <option value="{{ $coleccion->id }}">{{ $coleccion->id }}</option>
        @endforeach
    </select>
</div>

                    </select>
                </div>

                <div class="form-group">
                    <label for="porcentajecompleto">Porcentaje Completo</label>
                    <input type="text" class="form-control" id="porcentajecompleto" name="porcentajecompleto" value="{{ old('porcentajecompleto') }}" />
                </div>

                <div class="form-group">
                    <label for="horasjugadas">Horas Jugadas</label>
                    <textarea class="form-control" id="horasjugadas" name="horasjugadas">{{ old('horasjugadas') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="logrosdesbloqueados">Logros Desbloqueados</label>
                    <textarea class="form-control" id="logrosdesbloqueados" name="logrosdesbloqueados">{{ old('logrosdesbloqueados') }}</textarea>
                </div>

                <br>
                <button type="submit" class="btn btn-success">Guardar Progreso</button>
            </form>
        </div>
    </div>
@endsection
