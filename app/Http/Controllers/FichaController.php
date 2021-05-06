<?php

namespace App\Http\Controllers;

use App\Models\Fichaje;
use App\Models\User;

use Illuminate\Http\Request;

class FichaController extends Controller
{
    public function fichaEntrada(){
        $user = User::getUser();
        Fichaje::fichaEntrada($user);
        return redirect()->route('dashboard');
    }

    public function fichaSalida(){
        
        $user = auth()->user();
        Fichaje::fichaSalida($user);
        return redirect()->route('dashboard');
    }
}
