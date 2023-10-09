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
            'mme_email_address' => 'mentor1@gmail.com',
            'mme_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mme_first_name' => '次郎',
            'mme_last_name' => 'メンター',
            'mme_interview_salary' => 2000,
            'mme_lecture_create_salary' => 2000,
            'mme_lecture_salary' => 2000,
            'mme_line_url' => 'https://line.me/R/ti/p/%40test',
            'mme_timerex_url' => 'https://timrex.com/testlink',
        ]);
    }
}
