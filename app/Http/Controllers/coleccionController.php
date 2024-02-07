<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colecciones;
use App\Models\juegos;
use Illuminate\Support\Facades\Auth;

class coleccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['colecciones']=Colecciones::with('user')->paginate(5);
        return view('colecciones.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colecciones = new Colecciones();
        $colecciones = Colecciones::pluck('titulojuego', 'id');
        return view('colecciones.create', compact('colecciones', 'juegos'));
    }
    

    public function store(Request $request)
    {
        $this->validate($request, [
            'calificacion' => 'required',
            'comentario' => 'required',
            'fechaadquisicion' => 'required'
        ]);
    
        // Obtener el ID del usuario autenticado
        $user_id = auth()->user()->id;
    
        // Crear una nueva colección asociada con el usuario
        $coleccion = new Colecciones();
        $coleccion->user_id = $user_id;
        $coleccion->juego_id = $request->input('juego_id');
        $coleccion->calificacion = $request->input('calificacion');
        $coleccion->comentario = $request->input('comentario');
        $coleccion->fechaadquisicion = $request->input('fechaadquisicion');
    
        // Guardar la colección
        $coleccion->save();
    
        // Redireccionar o hacer cualquier otra cosa que necesites
        return redirect()->route('colecciones.index')->with('message', 'El videojuego se ha guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coleccion = Colecciones::findOrFail($id);
        return view('colecciones.edit', compact('coleccion'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $this->validate($request, [
            'juego_id' => 'required',
            'calificacion' => 'required',
            'comentario' => 'required',
            'fechaadquisicion' => 'required'
        ]);
    
        $coleccion = Colecciones::findOrFail($id);
        $coleccion->juego_id = $request->input('juego_id');
        $coleccion->calificacion = $request->input('calificacion');
        $coleccion->comentario = $request->input('comentario');
        $coleccion->fechaadquisicion = $request->input('fechaadquisicion');
        $coleccion->save();
    
        return redirect()->route('colecciones.index')->with (array('message' => 'La coleccion se ha actualizado correctamente'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coleccion = Colecciones::find($id);
    
        if($coleccion){
            $coleccion->status = 'inactive';
            $coleccion->save();
    
            return redirect()->route('colecciones.index')->with([
                "message" => "La colección se ha eliminado correctamente"
            ]);
        } else {
            return redirect()->route('colecciones.index')->with([
                "message" => "La colección que trata de eliminar no existe"
            ]);
        }  
    }
    
    public function deleteColeccion($colecciones_id){
        $colecciones = Colecciones::find($colecciones_id);
        if($colecciones){
            $colecciones->estatus = 0;
            $colecciones->update();
            return redirect()->route('colecciones.index')->with(array(
                "message" => "La coleccion se ha eliminado correctamente"));
        }else{
            return redirect()->route('colecciones.index')->with(array(
                "message" => "La coleccion que trata de eliminar no existe"));
        } //Fin del IF
     
     
     }

     public function createColeccion()
     {
        $colecciones = new Colecciones();
        $colecciones = Colecciones::pluck('id');
         return view('colecciones.create');
     }
}
