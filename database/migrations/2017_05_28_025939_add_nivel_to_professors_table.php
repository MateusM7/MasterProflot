<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNivelToProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professors', function (Blueprint $table) {
            $table->integer('cursos_id')->unsigned();
            $table->foreign('cursos_id')->references('id')->on('cursos');
            $table->integer('tipos_id')->unsigned();
            $table->foreign('tipos_id')->references('id')->on('tipos');
            $table->integer('nivel')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professors', function (Blueprint $table) {
            //
        });
    }
}
