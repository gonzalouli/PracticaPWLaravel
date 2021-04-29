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
class Fichaje extends Model
{
    use HasFactory;
    protected $table='fichaje';


    public function fichaEntrada(){
        $hoy = getdate();
        $entrada = $hoy['hours'].":".$hoy['minutes'];
        $Fichaje = DB::table('fichaje')->insert(['dni' => $this->attributes['dni'],
                                                'fecha' => date('Y-m-d'),
                                                'entrada' => $entrada]);
    }

    public function fichaSalida(){
        $hoy = getdate();
        $salida = $hoy['hours'].":".$hoy['minutes'];

        $fichaje = DB::table('fichaje')->where( 'dni', $this->attributes['dni'])->update(['salida' => $salida ]);
    }


}