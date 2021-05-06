<?php

namespace App\Models;

use App\Http\Requests\BajaRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class Baja extends Model
{
    use HasFactory;
    protected $table='baja';
    protected $fillable = [
        'userid','motivo', 'inicio', 'final', 'observaciones'
    ];


    public static function saveBaja(Request $request){
        //dd($request);
        $user = Auth::User();
        $motivo = $request->post('motivo');
        $inicio = $request->post('inicio');
        $fin = $request->post('fin');

        $observaciones = $request->post('observaciones');
        Baja::create(['userid'=>$user->id,'motivo'=>$motivo,
        'inicio'=> $inicio,'final'=> $fin,'observaciones'=>$observaciones ]);
    }
}
