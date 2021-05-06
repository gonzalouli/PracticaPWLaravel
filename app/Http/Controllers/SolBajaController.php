<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Baja;
use App\Http\Requests\BajaRequest;

class SolBajaController extends Controller
{
    function solicitud(BajaRequest $request){
        Baja::saveBaja($request);
        return route('/dashboard') ;    
    }
}
