<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServicePlan;

class ServicePlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicePlan::create([
            'tsp_user_id' => 1,
            'tsp_service_plan_name' => 'プランA',
            'tsp_subscribe_price' => 20000,
            'tsp_event_attendance' => 1,
            'tsp_interview_count' => 3,
            'tsp_case_study_count' => 1,
            'tsp_service_plan_month' => date('Y-m'),
        ]);
    }
}
