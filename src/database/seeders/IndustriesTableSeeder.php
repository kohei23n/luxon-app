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
            'min_industry_name' => '戦略コンサルティング',
        ]);
        Industry::create([
            'min_industry_name' => '総合コンサルティング',
        ]);
        Industry::create([
            'min_industry_name' => '外資系投資銀行',
        ]);
        Industry::create([
            'min_industry_name' => 'デベロッパー',
        ]);
        Industry::create([
            'min_industry_name' => '商社',
        ]);
    }
}
