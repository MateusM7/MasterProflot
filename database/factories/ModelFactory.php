<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(MasterProflot\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(MasterProflot\Models\Periodo::class, function (Faker\Generator $faker) {
    return [
         'description'=> $faker->sentence,
    ];
});

$factory->define(MasterProflot\Models\Curso::class, function (Faker\Generator $faker) {
    return [
         'description'=> $faker->sentence,
    ];
});

$factory->define(MasterProflot\Models\Funcionario::class, function (Faker\Generator $faker) {
    return [
    'name'=> $faker->name,
    'email' => $faker->safeEmail,
    'phone'=> $faker->phoneNumber,
    'birth_date'=> $faker->date,
    'sex' => $faker->word,
    'username'=> $faker->name,
    'password'=> $faker->word,
    ];
});

$factory->define(MasterProflot\Models\Aluno::class, function (Faker\Generator $faker) {
    return [
    'name'=> $faker->name,
    'email' => $faker->safeEmail,
    'phone'=> $faker->phoneNumber,
    'birth_date'=> $faker->date,
    'sex' => $faker->word,
    'username'=> $faker->name,
    'password'=> $faker->word,
    ];
});

$factory->define(MasterProflot\Models\Fluxo::class, function (Faker\Generator $faker) {
    return [
         'description'=> $faker->sentence,
    ];
});

$factory->define(MasterProflot\Models\Disciplina::class, function (Faker\Generator $faker) {
    return [
    'name'=> $faker->name,
    'carga_horaria'=> $faker->numberBetween(60,100),
    ];
});


$factory->define(MasterProflot\Models\Turma::class, function (Faker\Generator $faker) {
    return [
        'number' => $faker->numberBetween(1,10),
    ];
});

$factory->define(MasterProflot\Models\Professor::class, function (Faker\Generator $faker) {
    return [
    'name'=> $faker->name,
    'email' => $faker->safeEmail,
    'phone'=>$faker->phoneNumber,
    'birth_date'=>$faker->date,
    'sex' => $faker->word,
    'username'=>$faker->name,
    'password'=>$faker->word,
    'regiment'=> $faker->word,
    'lates'=> $faker->word,
    ];
});

$factory->define(MasterProflot\Models\Sala::class, function (Faker\Generator $faker) {
    return [
        'campus'=> $faker->word,
        'capacity'=> $faker->numberBetween(30,50),
        'number' => $faker->numberBetween(1,60),
    ];
});
