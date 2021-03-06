<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Baja', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('motivo');
            $table->string('inicio');
            $table->string('final');
            $table->string('observaciones');
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
        Schema::dropIfExists('Baja');
    }
}
