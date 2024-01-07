<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ScholarityType;

class ScholarityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Ensino Médio', 'Graduação', 'Pós-graduação', 'Mestrado', 'Doutorado', 'Curso Técnico'];

        foreach ($types as $t)
        {
            ScholarityType::firstOrCreate(['description' => $t]);
        }
    }
}
