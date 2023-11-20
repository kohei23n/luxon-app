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
            'tud_first_industry_preference' => 'IT',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 1,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 38,
            'tud_current_university' => '大阪大学大学院',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 39,
            'tud_current_university' => '東京理科大学大学院',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 40,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 41,
            'tud_current_university' => '名古屋大学大学院',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 42,
            'tud_current_university' => '東北大学大学院',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 43,
            'tud_current_university' => '立教大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 0,
            'tud_interview_count_remaining' => 4,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 44,
            'tud_current_university' => '神戸大学大学院',
            'tud_first_industry_preference' => '日系IB',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 45,
            'tud_current_university' => '立命館大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 46,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '日系金融',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 47,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '戦コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 48,
            'tud_current_university' => 'お茶の水女子大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '日系証券',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 49,
            'tud_current_university' => '岡山大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => 'メーカー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 50,
            'tud_current_university' => '筑波大学大学院',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 51,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 52,
            'tud_current_university' => '同志社大学',
            'tud_first_industry_preference' => 'IT',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 53,
            'tud_current_university' => '関東学院大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '日系金融',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 54,
            'tud_current_university' => '立命館大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 55,
            'tud_current_university' => '東京大学大学院',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);
        
        UserDetail::create([
            'tud_user_id' => 56,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総合デベロッパー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 57,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総合デベロッパー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 58,
            'tud_current_university' => '慶應義塾大学大学院',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '日系金融',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 59,
            'tud_current_university' => '中央大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '日系IB',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 4,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 60,
            'tud_current_university' => '東京理科大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 61,
            'tud_current_university' => '名古屋大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 62,
            'tud_current_university' => '大阪大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 63,
            'tud_current_university' => '上智大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 64,
            'tud_current_university' => '東京理科大学大学院',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 65,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 66,
            'tud_current_university' => '東京大学大学院',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => 'メーカー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 67,
            'tud_current_university' => '同志社大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 68,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 69,
            'tud_current_university' => '熊本大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 70,
            'tud_current_university' => '東京大学',
            'tud_first_industry_preference' => '日系金融',
            'tud_second_industry_preference' => '日系証券',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 71,
            'tud_current_university' => '中央大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総合デベロッパー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 72,
            'tud_current_university' => '立命館大学大学院',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 73,
            'tud_current_university' => '京都大学大学院',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 74,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 75,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 76,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 77,
            'tud_current_university' => '東京大学',
            'tud_first_industry_preference' => '外銀',
            'tud_second_industry_preference' => '戦コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 78,
            'tud_current_university' => '同志社大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '出版',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 2,
        ]);

        UserDetail::create([
            'tud_user_id' => 79,
            'tud_current_university' => '大阪大学大学院',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => 'FAS',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 79,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 80,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '戦コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 81,
            'tud_current_university' => '大阪大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 82,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => 'M&A仲介',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 83,
            'tud_current_university' => '法政大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 84,
            'tud_current_university' => '名古屋大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 85,
            'tud_current_university' => '静岡県立大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'メーカー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 86,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '日系IB',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 0,
            'tud_interview_count_remaining' => 0,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 0,
        ]);

        UserDetail::create([
            'tud_user_id' => 87,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '広告',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 88,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '日系金融',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 89,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 90,
            'tud_current_university' => '東京大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 91,
            'tud_current_university' => '東京大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 92,
            'tud_current_university' => 'Central European University',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 93,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 0,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 94,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '日系IB',
            'tud_second_industry_preference' => '日系金融',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 4,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 100,
        ]);

        UserDetail::create([
            'tud_user_id' => 95,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => 'なし',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 96,
            'tud_current_university' => '日本大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '日系金融',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 97,
            'tud_current_university' => '大阪府立大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 98,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 99,
            'tud_current_university' => '明治大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 100,
            'tud_current_university' => '東京大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 4,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 100,
        ]);

        UserDetail::create([
            'tud_user_id' => 101,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 102,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総合デベロッパー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 103,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '外銀',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 104,
            'tud_current_university' => '明治大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => 'メーカー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 105,
            'tud_current_university' => 'お茶の水女子大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 106,
            'tud_current_university' => '大阪大学',
            'tud_first_industry_preference' => '広告',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 107,
            'tud_current_university' => '横浜国立大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => 'メーカー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 108,
            'tud_current_university' => '早稲田大学大学院',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '日系IB',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 109,
            'tud_current_university' => '一橋大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '日系金融',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 110,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '広告',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 111,
            'tud_current_university' => '東京理科大学',
            'tud_first_industry_preference' => 'IT',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 112,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 113,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 114,
            'tud_current_university' => '大阪大学',
            'tud_first_industry_preference' => 'FAS',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 115,
            'tud_current_university' => '北海道大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '戦コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 116,
            'tud_current_university' => '立教大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 117,
            'tud_current_university' => '大阪公立大学大学院',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 118,
            'tud_current_university' => '九州大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 119,
            'tud_current_university' => '京都大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => 'VC',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 120,
            'tud_current_university' => '東京大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 121,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 122,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 123,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '日系金融',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 123,
            'tud_current_university' => '一橋大学',
            'tud_first_industry_preference' => '日系金融',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 124,
            'tud_current_university' => '京都大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '戦コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 125,
            'tud_current_university' => '大阪市立大学',
            'tud_first_industry_preference' => 'FAS',
            'tud_second_industry_preference' => '日系証券',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 4,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 100,
        ]);

        UserDetail::create([
            'tud_user_id' => 126,
            'tud_current_university' => '筑波大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '広告',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 127,
            'tud_current_university' => '一橋大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 128,
            'tud_current_university' => '福島大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 129,
            'tud_current_university' => '大阪大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '戦コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 130,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 4,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 100,
        ]);

        UserDetail::create([
            'tud_user_id' => 131,
            'tud_current_university' => '東京大学大学院',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 132,
            'tud_current_university' => '早稲田大学大学院',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 133,
            'tud_current_university' => '広島大学大学院',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => 'インフラ',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 134,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 135,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 136,
            'tud_current_university' => '京都大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合デベロッパー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 137,
            'tud_current_university' => '九州大学大学院',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 0,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 138,
            'tud_current_university' => '立命館大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 0,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 139,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 140,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '外銀',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 0,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 141,
            'tud_current_university' => '中央大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 142,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '総合デベロッパー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 143,
            'tud_current_university' => '東京工業大学',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 144,
            'tud_current_university' => '中央大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 100,
        ]);

        UserDetail::create([
            'tud_user_id' => 145,
            'tud_current_university' => '長崎大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => 'メーカー',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 146,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '広告',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 147,
            'tud_current_university' => '大阪大学大学院',
            'tud_first_industry_preference' => '総コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 148,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合商社',
            'tud_second_industry_preference' => '日系IB',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 149,
            'tud_current_university' => '阪南大学',
            'tud_first_industry_preference' => 'IT',
            'tud_second_industry_preference' => '日系金融',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 150,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => 'IT',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 151,
            'tud_current_university' => '東京大学大学院',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 4,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 100,
        ]);

        UserDetail::create([
            'tud_user_id' => 152,
            'tud_current_university' => '九州大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 153,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '戦コン',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 154,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => 'FAS',
            'tud_second_industry_preference' => '監査法人、税理士法人',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 3,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 3,
        ]);

        UserDetail::create([
            'tud_user_id' => 155,
            'tud_current_university' => '東京大学',
            'tud_first_industry_preference' => 'FAS',
            'tud_second_industry_preference' => '戦コン',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 2,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 156,
            'tud_current_university' => '慶應義塾大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);

        UserDetail::create([
            'tud_user_id' => 157,
            'tud_current_university' => '早稲田大学',
            'tud_first_industry_preference' => '総合デベロッパー',
            'tud_second_industry_preference' => '総合商社',
            'tud_service_plan_id' => 1,
            'tud_event_attendance_remaining' => 1,
            'tud_interview_count_remaining' => 1,
            'tud_case_study_count_remaining' => 0,
            'tud_es_count_remaining' => 1,
        ]);
    }
}
