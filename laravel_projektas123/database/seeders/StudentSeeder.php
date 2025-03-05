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
        
        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'vardas' => $faker->firstName,
                'pavarde' => $faker->lastName,
                'gim_data' => $faker->date,
                'telefonas' => $faker->phoneNumber,
                'adresas' => $faker->address,
            ]);
        }
    }
}
