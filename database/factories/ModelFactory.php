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
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    
    return [
        'nome_cliente' => $faker->name,
        'data_nasc_cliente' => $faker->date,
        'telefone_cliente'=>$faker->e164PhoneNumber,
        'endereco_cliente' => $faker->streetAddress,
        'ponto_ref' => $faker->streetName,
    ];
});

	$factory->define(App\Empresa::class, function (Faker\Generator $faker) {
	
		return [
				'nome_empresa' => $faker->name,
				'cnpj_empresa' => $faker->e164PhoneNumber,
				'endereco_empresa'=>$faker->streetAddress,
				'telefone_empresa' => $faker->PhoneNumber,
				'email_empresa' => $faker->email,
		];
	});
	
