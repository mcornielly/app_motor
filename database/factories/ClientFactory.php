<?php

use Faker\Generator as Faker;
use App\Client;

$factory->define(Client::class, function (Faker $faker) {

    return [
       'code' => rand(1,150), 
       'name' => $faker->name, 
       'razon_social' => $faker->company, 
       'nickname' => $faker->text(8), 
       'email' => $faker->unique()->safeEmail, 
       'birth_date' => $faker->dateTime(), 
       'reference' => $faker->text(30), 
       'cp' => $faker->word(4), 
       'cuit' => $faker->word(8), 
       'tax' => $faker->randomFloat(2), 
    ];
});

