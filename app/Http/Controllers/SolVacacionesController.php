<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacaciones;

class SolVacacionesController extends Controller
{
    function solicitud(Request $request){
        
        //dd($data);
        Vacaciones::saveVacas($request);
        return redirect()->route('dashboard');
    }
}
