<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Member;
use Faker\Generator as Faker;
$factory->define(Member::class, function (Faker $faker) {
    $gender = $faker->randomElements(["男", "女"])[0];
    return [
        //
        'name' => $faker->name($gender),
        'sex' => $gender,
        'age' => $faker->numberBetween(18, 50),
        'created_at'    => now(),
        'updated_at'    => now(),
    ];
});
