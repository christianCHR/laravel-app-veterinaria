<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    //
    public function home(){
        $mensaje="Mensaje desde controlador";
        $cita=DB::select("SELECT * from cita");
        return view("layout",['mensaje'=>$mensaje,'citas'=>$cita]);
    }
}
