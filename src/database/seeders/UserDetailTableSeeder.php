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
            'tud_user_id' => 1,
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 1,
            'tud_es_count_remaining' => 1,
        ]);
        UserDetail::create([
            'tud_user_id' => 2,
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 2,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 2,
            'tud_es_count_remaining' => 2,
        ]);
        UserDetail::create([
            'tud_user_id' => 3,
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 3,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 3,
            'tud_es_count_remaining' => 3,
        ]);
    }
}
