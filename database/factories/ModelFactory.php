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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// $factory->define(App\Article::class, functioN (Faker\Generator $faker) {
// 	return [
// 		'title' => $faker->title,
// 		'slug' => $faker->slug,
// 		'content' => $faker->paragraphs($nb=20, $asText = false),

// 	];
// });

$factory->define(App\Author::class, function (Faker\Generator $faker) {
	return [
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'address' => $faker->streetAddress,
		'phone' => $faker->phoneNumber,
	];
});

$factory->define(App\Category::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->text($maxNbChars = 100),
        ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text($maxNbChars = 50),
    ];
});

$factory->define(App\Comment::class, function(Faker\Generator $faker) {
    return [

    ];
});

$factory->define(App\Article::class, function(Faker\Generator $faker) {
    return [

    ];
}); 

$factory->define(App\ArticleTag::class, function(Faker\Generator $faker){
    return [

    ];
}); 