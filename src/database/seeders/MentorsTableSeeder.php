<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mentor;

class MentorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mentor::create([
            'mme_user_id' => 1,
            'mme_interview_salary' => 2000,
            'mme_lecture_create_salary' => 2000,
            'mme_lecture_salary' => 2000,
            'mme_line_url' => 'https://line.me/R/ti/p/%40test',
            'mme_timerex_url' => 'https://timrex.com/testlink',
        ]);
        Mentor::create([
            'mme_user_id' => 2,
            'mme_interview_salary' => 3000,
            'mme_lecture_create_salary' => 3000,
            'mme_lecture_salary' => 3000,
            'mme_line_url' => 'https://line.me/R/ti/p/%40test',
            'mme_timerex_url' => 'https://timrex.com/testlink',
        ]);
    }
}
