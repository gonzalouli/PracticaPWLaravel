<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsereventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserEvents', function (Blueprint $table) {
            $table->id();
            $table->integer('iduser');
            $table->bigInteger('idevent');
            $table->timestamps();
            $table->primary('iduser');
            $table->primary('idevent');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserEvents');
    }
}
