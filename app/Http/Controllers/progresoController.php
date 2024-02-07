<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progreso;
use App\Models\Colecciones;

class ProgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Progreso::all();
        return view('progresos.index', ['datos' => $datos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colecciones = Colecciones::all();
        return view('progresos.create', ['colecciones' => $colecciones]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'colecciones_id' => 'required',
            'porcentajecompleto' => 'required',
            'horasjugadas' => 'required',
            'logrosdesbloqueados' => 'required'
        ]);

        $progreso = new Progreso();
        $progreso->colecciones_id = $request->input('colecciones_id');
        $progreso->porcentajecompleto = $request->input('porcentajecompleto');
        $progreso->horasjugadas = $request->input('horasjugadas');
        $progreso->logrosdesbloqueados = $request->input('logrosdesbloqueados');
        $progreso->save();

        return redirect()->route('progresos.index')->with([
            'message' => 'El progreso se ha guardado correctamente'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $progreso = Progreso::findOrFail($id);
        $colecciones = Colecciones::all();
        return view('progresos.edit', compact('progreso', 'colecciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'colecciones_id' => 'required',
            'porcentajecompleto' => 'required',
            'horasjugadas' => 'required',
            'logrosdesbloqueados' => 'required'
        ]);

        $progreso = Progreso::findOrFail($id);
        $progreso->colecciones_id = $request->input('colecciones_id');
        $progreso->porcentajecompleto = $request->input('porcentajecompleto');
        $progreso->horasjugadas = $request->input('horasjugadas');
        $progreso->logrosdesbloqueados = $request->input('logrosdesbloqueados');
        $progreso->save();

        return redirect()->route('progresos.index')->with([
            'message' => 'El progreso se ha actualizado correctamente'
        ]);
    }
    public function show(string $id)
    {
        // Lógica para mostrar un progreso específico
    }
    public function destroy($id)
    {
        $CamposProgreso = Progreso::find($id);
 
        if($CamposProgreso){
            $CamposProgreso->status = 'inactive';
            $CamposProgreso->update();
            return redirect()->route('progresos.index')->with(array(
                "message" => "El progreso se ha eliminado correctamente"));
        }else{
            return redirect()->route('progresos.index')->with(array(
                "message" => "La coleccion que trata de eliminar no existe"));
        }  
    }

    public function deleteProgreso($progresos_id){
        $progresos = Progreso::find($progresos_id);
        if($progresos){
            $progresos->estatus = 0;
            $progresos->update();
            return redirect()->route('progresos.index')->with(array(
                "message" => "El progreso se ha eliminado correctamente"));
        }else{
            return redirect()->route('progresos.index')->with(array(
                "message" => "El progreso que trata de eliminar no existe"));
        } //Fin del IF
 }

}