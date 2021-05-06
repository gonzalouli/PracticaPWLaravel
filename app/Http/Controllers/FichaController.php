<?php

namespace App\Http\Controllers;

use App\Models\Fichaje;
use App\Models\User;

use Illuminate\Http\Request;

class FichaController extends Controller
{
    public function fichaEntrada(){
        Fichaje::fichaEntrada();
        return redirect()->route('dashboard');
    }

    public function fichaSalida(){
        Fichaje::fichaSalida();
        return redirect()->route('dashboard');
    }
}
