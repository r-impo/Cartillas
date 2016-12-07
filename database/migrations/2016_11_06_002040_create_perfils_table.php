<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('perfils', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('especialidad');
            $table->text('experiencia');
            $table->string('obra_social');
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('telefono');
            $table->tinyInteger('rating');
            $table->string('avatar')->default('default.jpg');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('perfils');
    }
}
