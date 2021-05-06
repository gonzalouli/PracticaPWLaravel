<?php

namespace App\Models;

use App\Http\Requests\BajaRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Baja extends Model
{
    use HasFactory;
    protected $table='baja';


    public static function saveBaja(BajaRequest $request){
        $motivo = $request->motivo;
        $inicio = $request->inicio;
        $fin = $request->fin;
        $observaciones = $request->observaciones;
        DB::table('baja')->insert(['id'=>Auth()->id,'motivo'=>$motivo,
        'inicio'=> $inicio,'final'=> $fin,'observaciones'=>$observaciones ]);  
    }
}
