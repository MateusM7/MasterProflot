<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinaHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina_horarios', function (Blueprint $table) {
            $table->integer('disciplinas_id')->unsigned();
            $table->foreign('disciplinas_id')->references('id')->on('disciplinas');
            $table->integer('horarios_id')->unsigned();
            $table->foreign('horarios_id')->references('id')->on('horarios');
            $table->primary(['disciplinas_id', 'horarios_id']);
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
        Schema::drop('disciplina_horarios');
    }
}
