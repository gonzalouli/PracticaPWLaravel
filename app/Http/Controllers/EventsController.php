<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    /**
     * Show the users events.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $events = new Eventos();
        $eventos = $events->giveEvents();
        //return view('userEvents', compact("eventos"));
        return view('userEvents')->with('eventos', $eventos);
    }


}
