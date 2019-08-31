<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Business;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Business::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->realText(),
        'long' => $faker->randomFloat(),
        'lat' => $faker->randomFloat(),
        'address_line_1' => $faker->sentence(),
        'address_line_2' => $faker->sentence(),
        'surbub' => $faker->sentence(),
        'city' => $faker->sentence(),
        'postal_code' => random_int(0, 4294967295),
        'opens' => $faker->time(),
        'closes' => $faker->time(),
        'category_id' => random_int(1, 10),
        'visits' => random_int(0, 4294967295)
    ];
});