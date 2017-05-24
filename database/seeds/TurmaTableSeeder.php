<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Turma;
class TurmaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Turma::class,10)->create();
    }
}
