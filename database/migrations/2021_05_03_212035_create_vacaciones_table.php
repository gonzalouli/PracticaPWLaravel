<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vacaciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("iduser")->default(-1);
            $table->string('inicio');
            $table->string('fin');
            $table->boolean('aceptada')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vacaciones');
    }
}
