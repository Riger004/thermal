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
        'email' => $faker->email,
        'phone_num'=>$faker->phoneNumber,
        'password' => (str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\profiles::class, function (Faker\Generator $faker) {
    return [
        'about' => $faker->paragraph,
        'country' => $faker->country,
        'language'=>$faker->languageCode,
        'profile_pic' => $faker->imageUrl,
        'recent_delivery' => $faker->dateTime,
        'avg_response_time' => $faker->randomNumber(2),
    ];
});