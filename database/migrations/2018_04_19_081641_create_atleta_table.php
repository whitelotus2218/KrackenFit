<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtletaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atleta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('genero'); //0 masculino 1 femenino
            $table->date('cumpleaños');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('password'); 
            $table->integer('estudio_id')->nullable();
            $table->integer('rutina_id')->nullable();
            $table->integer('admin_id');
            $table->integer('employee_id')->nullable();
            $table->rememberToken();
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
        Schema::drop('atleta');
    }
}
