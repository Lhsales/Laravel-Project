<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LanguageType;

class LanguageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Frontend', 'Backend', 'Banco de Dados'];

        foreach ($types as $t)
        {
            LanguageType::firstOrCreate(['description' => $t]);
        }
    }
}
