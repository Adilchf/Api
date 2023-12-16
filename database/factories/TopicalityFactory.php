<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Topicality;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topicality>
 */

$factory->define(Topicality::class, function (Faker $faker){
    return[
        'title'=> $faker->sentence(6, true),
        'content'=> $faker->paragraphe(3, true)
    ];
});
