<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\juegos;

class juegoController extends Controller
{

    public function index()
    {
            $datos['juegos'] = juegos::where('status', 'active')->paginate(5);
            return view('juegos.index', $datos);   
    }

    public function create()
    {
        return view('juegos.create');
    }

    public function store(Request $request)
    {

    $this->validate($request, [
    'titulojuego' => 'required|min:5',
    'plataforma' => 'required',
    'genero' => 'required',
    'descripcion' => 'required'
    ]);


    $juego = new juegos();
    $juego->titulojuego = $request->input('titulojuego');
    $juego->plataforma = $request->input('plataforma');
    $juego->genero = $request->input('genero');
    $juego->descripcion = $request->input('descripcion');
    $juego->save();
    return redirect()->route('juegos.index')->with(array(
    'message' => 'El videojuego se ha guardado correctamente'
    ));
    }   

    public function show($id)
    {
        
    }

    public function edit(string $id)
    {
       //Abre el formulario que permita editar un registro
       $juego = juegos::findOrFail($id);
       return view('juegos.edit', array(
           'juegos'=>$juego
       ));
    }
    

    public function update(Request $request, string $id)
  {
    
        $this->validate($request, [
        'titulojuego' => 'required|min:5',
        'plataforma' => 'required',
        'genero' => 'required',
        'descripcion' => 'required',
    ]);
    $juego = juegos::findOrFail($id);
    $juego->titulojuego =  $request->input('titulojuego');
    $juego->plataforma = $request->input('plataforma');
    $juego->genero = $request->input('genero');
    $juego->descripcion = $request->input('descripcion');
    $juego->save();
    return redirect()->route('juegos.index')->with(array(
    'message' => 'El juego se ha actualizado correctamente'
    ));

  }

    public function destroy($id)
    {
        $CamposJuegos = juegos::find($id);
 
        if($CamposJuegos){
            $CamposJuegos->status = 'inactive';
            $CamposJuegos->update();
            return redirect()->route('juegos.index')->with(array(
                "message" => "El Juego se ha eliminado correctamente"));
        }else{
            return redirect()->route('juegos.index')->with(array(
                "message" => "El juego que trata de eliminar no existe"));
        }  
    }

   
    public function createJuego()
    {
        // Lógica para mostrar el formulario de nuevo juego
        return view('juegos.create');
    }

    public function createProgreso()
    {
        // Lógica para mostrar el formulario de nuevo progreso
        return view('progresos.create');
    }

    public function createColeccion()
    {
        // Lógica para mostrar el formulario de nueva colección
        return view('colecciones.create');
    }

    public function deleteJuego($juegos_id){
        $juego = juegos::find($juegos_id);
        if($juego){
            $juego->estatus = 0;
            $juego->update();
            return redirect()->route('juegos.index')->with(array(
                "message" => "El juego se ha eliminado correctamente"));
        }else{
            return redirect()->route('juegos.index')->with(array(
                "message" => "El juego que trata de eliminar no existe"));
        } //Fin del IF
     
     
     }
        
}