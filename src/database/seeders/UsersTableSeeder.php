<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            'mus_user_last_name' => '麺太',
            'mus_is_mentor' => true,
        ]);
        User::create([
            'mus_email_address' => 'mentor2@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '次郎',
            'mus_user_last_name' => '面太',
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
        User::create([
            'mus_email_address' => 'yhara1189@icloud.com',
            'mus_user_password' => Hash::make('yhara1189@icloud.com'),
            'mus_user_first_name' => 'よし',
            'mus_user_last_name' => 'はら',
            'mus_dedicated_mentor_id' => 1,
        ]);
        User::create([
            'mus_email_address' => 'kinoshita.kaisei.465@s.kyushu-u.ac.jp',
            'mus_user_password' => Hash::make('kaisei0419'),
            'mus_user_first_name' => '海征',
            'mus_user_last_name' => '木下',
            'mus_dedicated_mentor_id' => 1,
        ]);
        User::create([
            'mus_email_address' => 'nakajimaaa0725@gmail.com',
            'mus_user_password' => Hash::make('36474738'),
            'mus_user_first_name' => '将',
            'mus_user_last_name' => '中島',
            'mus_dedicated_mentor_id' => 1,
        ]);
        User::create([
            'mus_email_address' => 'soh336699@gmail.com',
            'mus_user_password' => Hash::make('Qwer1234'),
            'mus_user_first_name' => '壮甫',
            'mus_user_last_name' => '今村',
            'mus_dedicated_mentor_id' => 1,
        ]);
        User::create([
            'mus_email_address' => 'daoxiayoudeng@gmail.com',
            'mus_user_password' => Hash::make('Yuppon0510'),
            'mus_user_first_name' => '道下',
            'mus_user_last_name' => '悠登',
            'mus_dedicated_mentor_id' => 1,
        ]);
    }
}