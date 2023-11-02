<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserDetail;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserDetail::create([
            'tud_user_id' => 4,
            'tud_current_university' => '東京大学',
            'tud_first_industry_preference' => 'IT・通信',
            'tud_second_industry_preference' => '総合コンサル',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 1,
            'tud_es_count_remaining' => 1,
        ]);
        UserDetail::create([
            'tud_user_id' => 5,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => 'IT・通信',
            'tud_second_industry_preference' => '総合コンサル',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 2,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 2,
            'tud_es_count_remaining' => 2,
        ]);
        UserDetail::create([
            'tud_user_id' => 6,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => 'IT・通信',
            'tud_second_industry_preference' => '総合コンサル',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 3,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 3,
            'tud_es_count_remaining' => 3,
        ]);
    }
}
