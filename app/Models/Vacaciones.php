<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Controllers\UserController;
class Vacaciones extends Model
{
    use HasFactory;
    protected $table="vacaciones";
    protected $fillable = [
        'iduser', 'inicio', 'fin'
    ];

    public static function saveVacas(Request $request)
    {
        $id = Auth::User()->id;
        $inicio = $request->post('inicio');
        $fin = $request->post('fin');
        //dd($id);
        Vacaciones::create(['iduser'=> $id,'inicio'=> $inicio,'fin'=> $fin]);
    }
}
