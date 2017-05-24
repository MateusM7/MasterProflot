<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Curso;
class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Curso::class,10)->create();
    }
}
