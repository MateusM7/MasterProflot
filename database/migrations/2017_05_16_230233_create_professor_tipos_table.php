<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorTiposTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professor_tipos', function(Blueprint $table) {
			$table->integer('professors_id')->unsigned();
			$table->foreign('professors_id')->references('id')->on('professors');
			$table->integer('tipos_id')->unsigned();
			$table->foreign('tipos_id')->references('id')->on('tipos');
			$table->primary(['professors_id', 'tipos_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professor_tipos');
	}

}
