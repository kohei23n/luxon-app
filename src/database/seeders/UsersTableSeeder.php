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
            'mus_email_address' => 'mentor1@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '一郎',
            'mus_user_last_name' => 'メンター',
            'mus_is_mentor' => true,
        ]);
        User::create([
            'mus_email_address' => 'mentor2@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '次郎',
            'mus_user_last_name' => 'メンター',
            'mus_is_mentor' => true,
        ]);
        User::create([
            'mus_email_address' => 'admin@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '太郎',
            'mus_user_last_name' => 'アドミン',
            'mus_is_admin' => true,
        ]);
        User::create([
            'mus_email_address' => 'test@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '一郎',
            'mus_user_last_name' => 'ユーザー',
            'mus_dedicated_mentor_id' => 2,
        ]);
        User::create([
            'mus_email_address' => 'test2@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '次郎',
            'mus_user_last_name' => 'ユーザー',
            'mus_dedicated_mentor_id' => 2,
        ]);
        User::create([
            'mus_email_address' => 'test3@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '三郎',
            'mus_user_last_name' => 'ユーザー',
            'mus_dedicated_mentor_id' => 2,
        ]);
    }
}
