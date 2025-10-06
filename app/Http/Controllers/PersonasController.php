<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class PersonasController extends Controller
{
    public function Index(){
        $personas = Personas::all();
        return view("index", ["personas" => $personas]);
    }

     public function Crear(Request $request){
        $persona = new Personas();
        $persona->nombre = $request->post("nombre");
        $persona->apellido = $request->post("apellido");
        $persona->telefono = $request->post("telefono");
        $persona->save();
        return $persona;
    }

    public function Eliminar(Request $request, $id){
        $persona = Personas::findOrFail($id);
        $persona->delete();
        return [
            "mensaje" => "Persona " . $id . " eliminada"
        ];
    }

    public function Editar(Request $request, $id){
        $persona = Personas::findOrFail($id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->save();
        return $persona;
    }
}
