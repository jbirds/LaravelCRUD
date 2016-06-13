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


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Contact::class, function(Faker\Generator $faker) {

    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => str_random(10).'@gmail.com',
        'phone' => rand(1111111111,9999999999),
        'birthday' => date("Y/m/d", rand(strtotime("1990-01-01"), strtotime("2016-12-31"))),
        'address' => rand(1111,9999).' '.str_random(10).' Street',
        'city' => str_random(10),
        'state' => 'California',
        'zip' => rand(10000,99999),
    ];
});
