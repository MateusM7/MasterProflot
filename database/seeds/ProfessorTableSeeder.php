<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Professor;
class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Professor::class,10)->create();
    }
}
