<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SelectionStatus;

class SelectionStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SelectionStatus::create([
            'tss_user_id' => 4,
            'tss_company_name' => '株式会社テスト',
            'tss_selection_status' => '選考中',
            'tss_preference_ranking' => 1,
            'tss_selection_date' => '2023-10-07',
        ]);
        SelectionStatus::create([
            'tss_user_id' => 4,
            'tss_company_name' => '株式会社テスト2',
            'tss_selection_status' => '選考中',
            'tss_preference_ranking' => 2,
            'tss_selection_date' => '2023-10-07',
        ]);
    }
}
