<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'mus_email_address' => 'test@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '太郎',
            'mus_user_last_name' => 'テスト',
            'mus_current_university' => '東京大学',
            'mus_service_plan_id' => 1,
            'mus_first_industry_preference' => 'IT・通信',
            'mus_second_industry_preference' => '総合コンサル',
            'mus_dedicated_mentor_id' => 1,
        ]);
        User::create([
            'mus_email_address' => 'admin@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_is_admin' => true,
        ]);
    }
}
