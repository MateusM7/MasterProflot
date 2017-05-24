<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Fluxo;
class FluxoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Fluxo::class,10)->create();
    }
}
