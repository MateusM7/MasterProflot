<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Disciplina;
class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Disciplina::class,10)->create();
    }
}
