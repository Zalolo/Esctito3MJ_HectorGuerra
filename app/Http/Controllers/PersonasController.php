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
}
