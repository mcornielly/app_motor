<?php

use Faker\Generator as Faker;
use App\Client;


$factory->define(App\Address::class, function (Faker $faker) {
    return [
       'client_id' => Client::all()->random()->id,
       'address' => $faker->address,
       'locality' => $faker->city,
       'province' => $faker->state,
       'phone_number' => $faker->unique()->phoneNumber,
       'nextel_number' => $faker->unique()->phoneNumber,
       'cell_number' => $faker->unique()->phoneNumber,
    ];
});
