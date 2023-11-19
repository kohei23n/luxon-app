<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interview;

class InterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Interview::create([
            'tin_user_id' => 4,
            'tin_mentor_id' => 1,
            'tin_datetime' => '2023-11-25 20:00:00',
            'tin_time' => 60,
        ]);
        Interview::create([
            'tin_user_id' => 4,
            'tin_mentor_id' => 1,
            'tin_datetime' => '2023-11-28 17:00:00',
            'tin_time' => 60,
        ]);
    }
}
