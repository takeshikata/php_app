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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(Contact::class, function(Faker $faker){
    $faker = Faker\Factory::create('ja_JP');
    return [
        'name' => $faker->name,
        'prefecture' => $faker->prefecture,
        'city' => $faker->city,
        'zip_code' => $faker->postcode,
        'street_number' => $faker->streetAddress,
        'telephone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'contact_message' => $faker->realText($maxNbChars = 50, $indexSize = 2),
    ];
});
$factory->define(Property::class, function(Faker $faker){
    $images = array();
    $properties = array();
    for ($i = 0; $i < 10; $i++) {
      $images []= $faker->imageUrl($width, $height, 'property');
      $properties []= $faker->name;
    };

    return [
        'images' => $images,
        'properties' => $properties,
    ];
});
$factory->define(Image::class, function(Faker $faker){
  return [
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480, 'property', $randomize = true, $word = null),
  ];
});
