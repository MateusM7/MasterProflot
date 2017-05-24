<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Periodo;
class PeriodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Periodo::class,10)->create();
    }
}
