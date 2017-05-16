<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinaProfessorSalasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disciplina_professor_salas', function(Blueprint $table) {
  
			$table->integer('disciplinas_id')->unsigned();
			$table->foreign('disciplinas_id')->references('id')->on('disciplinas');
			$table->integer('professors_id')->unsigned();
			$table->foreign('professors_id')->references('id')->on('professors');
			$table->integer('salas_id')->unsigned();
			$table->foreign('salas_id')->references('id')->on('salas');
			$table->primary(['disciplinas_id', 'salas_id']);
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
		Schema::drop('disciplina_professor_salas');
	}

}
