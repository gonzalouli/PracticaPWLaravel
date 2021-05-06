<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Eventos extends Model
{

    protected $table = 'eventos';

    public function giveEvents()
    {   
        $eventIds = array();
        $userEvents = UserEvents::where('iduser', Auth::User()->id)->get();
        //dd($userEvents);
        //print_r($userEvents[0]);
        
        foreach($userEvents as $userEvent)
        {
          //dd($event);
          array_push($eventIds, $userEvent->id);
        }

        $events = Eventos::whereIn('id', $eventIds)->get();
        //dd($events);


        return $events;
    }


}
