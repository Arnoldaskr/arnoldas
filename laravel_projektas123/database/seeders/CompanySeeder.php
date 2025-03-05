<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 40; $i++) {
            Company::create([
                'pavadinimas' => $faker->company,
                'kodas' => $faker->unique()->numerify('########'),
                'adresas' => $faker->address,
                'telefonas' => $faker->phoneNumber,
                'el_pastas' => $faker->companyEmail,
            ]);
        }
    }
}

