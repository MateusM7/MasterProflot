<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Funcionario;
class FuncionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Funcionario::class,10)->create();
    }
}
