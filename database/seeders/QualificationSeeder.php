<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qualification;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
    public function run(): void
    {
        Qualification::create([
            'qualification' => 'Masters',
        ]);
        Qualification::create([
            'qualification' => 'Bachelors Degree',
        ]);
        Qualification::create([
            'qualification' => 'Diploma',
        ]);
        Qualification::create([
            'qualification' => 'Certificates VTI',
        ]);

        Qualification::create([
            'qualification' => 'Class XII',
        ]);
        Qualification::create([
            'qualification' => 'Class X',
        ]);
        Qualification::create([
            'qualification' => 'Below Class X',
        ]);
        Qualification::create([
            'qualification' => 'No Qualification',
 ]);
}
}
