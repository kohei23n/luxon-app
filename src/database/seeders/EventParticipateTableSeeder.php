<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventParticipant;

class EventParticipateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventParticipant::create([
            'tep_event_id' => 1,
            'tep_user_id' => 4,
        ]);
        EventParticipant::create([
            'tep_event_id' => 2,
            'tep_user_id' => 4,
        ]);
    }
}
