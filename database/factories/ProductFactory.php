<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    	'price' => $faker->numberBetween($min=10000, $max=500000),
    	'discount' => $faker->numberBetween($min=10, $max=90),
    	'rating' => $faker->numberBetween($min=1, $max=5),
        'imageUrl' => $faker->imageUrl(400,200),
    	'quanity' => $faker->numberBetween($min=0, $max=500),
    	'description' => implode('',$faker->sentences),
    	'priority' => $faker->numberBetween($min=1, $max=5),
    	'categoryId' => $faker->numberBetween($min=0, $max=1000),
    ];
});
