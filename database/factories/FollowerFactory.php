<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Follower;
use Faker\Generator as Faker;

$factory->define(Follower::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'follower_id' => factory(User::class),
    ];
});
