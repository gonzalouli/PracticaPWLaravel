<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the users events.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ShowEvents()
    {
        $eventos = $this->giveEvents();
        return view('userEvents',['eventos' => $eventos]);
    }


}
