<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Sala;
class SalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sala::class,10)->create();
    }
}
