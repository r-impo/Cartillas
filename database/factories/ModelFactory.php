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

$factory->define(App\Perfil::class, function (Faker\Generator $faker) {
    $especialidades = array('Alergistas', 'Analistas clínicos', 'Anestesistas', 'Bioquímicos', 'Cardiólogos', 'Cirujanos cardiovasculares', 'Cirujanos digestivos', 'Cirujanos generales', 'Cirujanos orales y maxilofaciales', 'Cirujanos pediátricos', 'Cirujanos plásticos', 'Cirujanos torácicos', 'Cirujanos vasculares', 'Dermatólogos', 'Endocrinólogos', 'Enfermeras', 'Especialistas en Medicina del Deporte', 'Especialistas en Medicina Nuclear', 'Especialistas en Terapia Intensiva', 'Especialistas en Toxicología', 'Flebólogos', 'Fonoaudiólogos', 'Gastroenterólogos', 'Genetistas', 'Geriatras',
    'Ginecólogos', 'Hematólogos', 'Hepatólogos', 'Homeópatas', 'Infectólogos', 'Kinesiólogos', 'Mastólogos', 'Médicos clínicos', 'Médicos estéticos', 'Médicos forenses', 'Médicos generales', 'Médicos laborales', 'Médicos naturistas', 'Médicos rehabilitadores', 'Nefrólogos', 'Neumonólogos', 'Neurocirujanos', 'Neurofisiólogos', 'Neurólogos', 'Nutricionistas', 'Obstetras', 'Odontólogos', 'Oftalmólogos', 'Oncólogos', 'Ópticos', 'Optometría', 'Osteópatas', 'Otorrinos', 'Patólogos', 'Pediatras', 'Podólogos', 'Profesionales en Terapias Alternativas', 'Protesistas - Ortesistas', 'Psicoanalistas', 'Psicólogos', 'Psicopedagogos', 'Psiquiatras',
    'Quiroprácticos', 'Radiólogos', 'Reumatólogos', 'Sexólogos', 'Terapistas ocupacionales', 'Traumatólogos', 'Urólogos');

    return [
        'especialidad' => $especialidades[array_rand($especialidades)],
        'obra_social' => 'Swiss',
        'direccion' => $faker->address,
    ];
});
