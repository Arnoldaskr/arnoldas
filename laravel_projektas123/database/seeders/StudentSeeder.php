<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1000; $i++) {
            Student::create([
                'name' => $faker->firstName,   // Keičiam 'vardas' -> 'name'
                'surname' => $faker->lastName, // Keičiam 'pavarde' -> 'surname'
                'phone' => $faker->phoneNumber, // Keičiam 'telefonas' -> 'phone'
                'address' => $faker->address,   // Keičiam 'adresas' -> 'address'
            ]);
        }
    }
}
