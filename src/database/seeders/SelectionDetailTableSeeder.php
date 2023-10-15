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
            'msd_selection_detail' => '1次面接の詳細',
            'msd_selection_materials_URL' => 'https://www.google.com/',
        ]);
        SelectionDetail::create([
            'msd_industry_id' => 1,
            'msd_company_id' => 1,
            'msd_selection_phase_id' => 2,
            'msd_selection_detail' => '2次面接の詳細',
            'msd_selection_materials_URL' => 'https://www.google.com/',
        ]);
        SelectionDetail::create([
            'msd_industry_id' => 1,
            'msd_company_id' => 2,
            'msd_selection_phase_id' => 3,
            'msd_selection_detail' => '最終面接の詳細',
            'msd_selection_materials_URL' => 'https://www.google.com/',
        ]);
        SelectionDetail::create([
            'msd_industry_id' => 1,
            'msd_company_id' => 2,
            'msd_selection_phase_id' => 4,
            'msd_selection_detail' => '役員面接の詳細',
            'msd_selection_materials_URL' => 'https://www.google.com/',
        ]);
    }
}
