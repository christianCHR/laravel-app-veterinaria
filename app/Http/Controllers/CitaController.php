<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cita;

class CitaController extends Controller
{
    //
    public function home(){
        //$mensaje="Mensaje desde controlador";
        
        // $cita=DB::select("SELECT * from cita");

        $cita=Cita::all(); //Accediendo a todos los registros desde la base de datos

        return view("citashome",['mensaje'=>$mensaje,'citas'=>$cita]);
    }
}
