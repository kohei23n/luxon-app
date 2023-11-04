<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SelectionDetail;

class SelectionDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SelectionDetail::create([
            'msd_industry_id' => 1,
            'msd_company_id' => 1,
            'msd_selection_phase_id' => 1,
            'msd_selection_detail' => '志望動機、学チカ400字ずつ',
            'msd_selection_materials_url' => 'https://www.google.com/',
        ]);
        SelectionDetail::create([
            'msd_industry_id' => 1,
            'msd_company_id' => 1,
            'msd_selection_phase_id' => 2,
            'msd_selection_detail' => '30分。学チカ、whyコンサル、why会社、逆質問。',
            'msd_selection_materials_url' => 'https://www.google.com/',
        ]);
        SelectionDetail::create([
            'msd_industry_id' => 1,
            'msd_company_id' => 2,
            'msd_selection_phase_id' => 3,
            'msd_selection_detail' => '1時間。why会社、逆質問。',
            'msd_selection_materials_url' => 'https://www.google.com/',
        ]);
        SelectionDetail::create([
            'msd_industry_id' => 1,
            'msd_company_id' => 2,
            'msd_selection_phase_id' => 4,
            'msd_selection_detail' => '45分。雑談ベースで逆質問。',
            'msd_selection_materials_url' => 'https://www.google.com/',
        ]);
    }
}
