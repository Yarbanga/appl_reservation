<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
//nous permet de creer des enregist en quantité et d'etabli facilement divers relation en notre tabble
$factory->define(User::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'prenom' => $faker->name,
        'email' => 'admin@admin.com',
        'email_verified_at' => now(),
        'username' => 'admin',
        'role' => 1,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
