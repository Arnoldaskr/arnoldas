<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        // Sugeneruojame 1000 studentų
        Student::factory()->count(1000)->create();
    }
}

