<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
use App\Categoria;
use App\Conta;

$factory->define(Conta::class, function (Faker $faker) {
    return [
        'descricao' => $faker->jobTitle,
        'id_categoria' => Categoria::all()->random()->id,
        'id_tipo_conta' => 1,      
        'valor' => $faker->randomFloat(2,1,100),        
    ];
});
