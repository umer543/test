<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(\App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'user_id' => '1',
        'photo' => 'seeded',

    ];
});

$factory->define(\App\Branch::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween(1,10),
        'address' => $faker->address,
        'country' => $faker->country,

    ];
});

$factory->define(\App\Timing::class, function (Faker $faker) {
    return [
        'branch_id' => $faker->numberBetween(1,30),
        'day' => $faker->dayOfWeek,
        'start_time' => $faker->dateTime,
        'end_time' => $faker->dateTime,

    ];
});

$factory->define(\App\Contact::class, function (Faker $faker) {
    return [
        'branch_id' => $faker->numberBetween(1,30),
        'phone' => $faker->numberBetween(4500,45000),

    ];
});
