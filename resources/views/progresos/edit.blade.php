@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Editar Progreso</h2>
            <hr>
            <form action="{{ route('progresos.update', $progreso->id) }}" method="post" enctype="multipart/form-data" class="col-lg-7">
                @csrf
                @method('PUT') <!-- Método HTTP para la actualización -->

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input type="hidden" name="colecciones_id" value="{{ $progreso->colecciones_id }}">

                <div class="form-group">
                    <label for="porcentajecompleto">Porcentaje Completo</label>
                    <input type="text" class="form-control" id="porcentajecompleto" name="porcentajecompleto" value="{{ old('porcentajecompleto', $progreso->porcentajecompleto) }}" />
                </div>

                <div class="form-group">
                    <label for="horasjugadas">Horas Jugadas</label>
                    <textarea class="form-control" id="horasjugadas" name="horasjugadas">{{ old('horasjugadas', $progreso->horasjugadas) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="logrosdesbloqueados">Logros Desbloqueados</label>
                    <textarea class="form-control" id="logrosdesbloqueados" name="logrosdesbloqueados">{{ old('logrosdesbloqueados', $progreso->logrosdesbloqueados) }}</textarea>
                </div>

                <br>
                <button type="submit" class="btn btn-success">Actualizar Progreso</button>
            </form>
        </div>
    </div>
@endsection
