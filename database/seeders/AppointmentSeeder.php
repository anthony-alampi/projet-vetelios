<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('fr_FR'); //transforme les données créer par faker US en FR
        for ($i = 0; $i < 10; $i++) {

            Appointment::create([ //Permet de créer des donnée en base pour simuler les rendez-vous
                'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'horaire' => $faker->time($format = 'H:i', $max = 'now'),
                'veterinaire' => $faker->lastName
            ]);
        }
    }   
}
