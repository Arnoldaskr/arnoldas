<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Company;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $companies = Company::all()->pluck('id')->toArray();

        for ($i = 0; $i < 350; $i++) {
            Client::create([
                'vardas' => $faker->firstName,
                'pavarde' => $faker->lastName,
                'telefonas' => $faker->phoneNumber,
                'el_pastas' => $faker->email,
                'company_id' => $faker->randomElement($companies),
            ]);
        }
    }
}

