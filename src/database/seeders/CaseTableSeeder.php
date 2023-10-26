<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CaseQuestion;

class CaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseQuestion::create([
            'tca_user_id' => 1,
            'tca_case_content' => '本屋の売上向上施策を考えてください。',
            'tca_case_time' => 10,
            'tca_case_url' => 'https://www.google.com/',
        ]);
    }
}
