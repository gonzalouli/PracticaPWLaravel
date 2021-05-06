<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\User;
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


    public static function fichaEntrada(){
        $hoy = getdate();
        $user = Auth::User();
        $entrada = $hoy['hours'].":".$hoy['minutes'];
        DB::table('fichaje')->insert(['dni' => $user->dni,
                                                'fecha' => date('Y-m-d'),
                                                'entrada' => $entrada]);
    }

    public static function fichaSalida(){
        $hoy = getdate();
        $user = Auth::User();
        $salida = $hoy['hours'].":".$hoy['minutes'];
        DB::table('fichaje')->where( 'dni', $user->dni)->update(['salida' => $salida ]);
    }


}