<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Industry::create([
            'min_industry_name' => '戦略コンサル',
        ]);
        
        Industry::create([
            'min_industry_name' => '総合コンサル',
        ]);

        Industry::create([
            'min_industry_name' => '商社',
        ]);

        Industry::create([
            'min_industry_name' => 'デベロッパー',
        ]);
    }
}
