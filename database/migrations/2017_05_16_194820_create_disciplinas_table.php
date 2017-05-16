<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fluxos_id')->unsigned();
            $table->foreign('fluxos_id')->references('id')->on('fluxos');
            $table->integer('periodos_id')->unsigned();
            $table->foreign('periodos_id')->references('id')->on('periodos');
            $table->string('name');
            $table->string('optativa');
            $table->string('pratica');
            $table->string('carga_horaria');
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
        Schema::drop('disciplinas');
    }
}
