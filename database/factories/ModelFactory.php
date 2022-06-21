<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'activated' => true,
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'last_name' => $faker->lastName,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\RegisteredUser::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'email' => $faker->email,
        'name' => $faker->firstName,
        'num_miembros' => $faker->randomNumber(5),
        'phone' => $faker->sentence,
        'surname' => $faker->lastName,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Despensa::class, static function (Faker\Generator $faker) {
    return [
        'categoria' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'nombre' => $faker->sentence,
        'stock' => $faker->randomNumber(5),
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Recibe::class, static function (Faker\Generator $faker) {
    return [
        'id_usuario' => $faker->randomNumber(5),
        'id_producto' => $faker->randomNumber(5),
        'fecha' => $faker->date(),
        'stock' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Editorial::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'nacionalidad' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Libro::class, static function (Faker\Generator $faker) {
    return [
        'isbn' => $faker->sentence,
        'titulo' => $faker->sentence,
        'autor' => $faker->sentence,
        'genero' => $faker->sentence,
        'recomendacion_generacional' => $faker->sentence,
        'id_editorial' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Prestamo::class, static function (Faker\Generator $faker) {
    return [
        'id_libro' => $faker->sentence,
        'usuario_prestamo' => $faker->randomNumber(5),
        'fechaInicio' => $faker->date(),
        'fechaFin' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Talla::class, static function (Faker\Generator $faker) {
    return [
        'talla' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Categoria::class, static function (Faker\Generator $faker) {
    return [
        'categoria' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Ropero::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'color' => $faker->sentence,
        'estado' => $faker->sentence,
        'talla' => $faker->randomNumber(5),
        'categoria' => $faker->randomNumber(5),
        'id_usuario' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Folleto::class, static function (Faker\Generator $faker) {
    return [
        'id_usuario' => $faker->randomNumber(5),
        'fecha' => $faker->date(),
        'cantidad_entregada' => $faker->randomNumber(5),
        'tipo_folleto' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
