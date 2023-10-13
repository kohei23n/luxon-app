<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'mev_industry_id' => 1,
            'mev_company_id' => 1,
            'mev_event_name' => '戦略イベントA',
            'mev_event_overview' => '戦略イベントAの概要が入ります',
            'mev_event_description' => '戦略イベントAの詳細が入ります',
            'mev_event_datetime' => '2023-10-10 10:00:00',
            'mev_event_participate_url' => 'https://www.google.com/',
        ]);
        Event::create([
            'mev_industry_id' => 1,
            'mev_company_id' => 2,
            'mev_event_name' => '戦略イベントB',
            'mev_event_overview' => '戦略イベントBの概要が入ります',
            'mev_event_description' => '戦略イベントBの詳細が入ります',
            'mev_event_datetime' => '2023-10-11 10:00:00',
            'mev_event_participate_url' => 'https://www.google.com/',
        ]);
        Event::create([
            'mev_industry_id' => 1,
            'mev_company_id' => 3,
            'mev_event_name' => '戦略イベントC',
            'mev_event_overview' => '戦略イベントCの概要が入ります',
            'mev_event_description' => '戦略イベントCの詳細が入ります',
            'mev_event_description' => '戦略イベントCでは、戦略についての説明を行います。',
            'mev_event_datetime' => '2023-10-17 10:00:00',
            'mev_event_participate_url' => 'https://www.google.com/',
        ]);
    }
}
