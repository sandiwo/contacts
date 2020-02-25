<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'group_id' => factory('App\Group'),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'avatar' => 'default.png',
        'address' => $faker->address,
        'city' => $faker->city,
        'zip' => $faker->countryCode,
        'country' => $faker->country,
        'email' => $faker->email,
        'phone' => rand(1111111111, 999999999999),
        'note' => $faker->text,
    ];
});
