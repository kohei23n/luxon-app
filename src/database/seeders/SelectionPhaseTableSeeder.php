<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SelectionPhase;

class SelectionPhaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SelectionPhase::create([
            'msp_phase_name' => 'ES',
        ]);
        SelectionPhase::create([
            'msp_phase_name' => '1次面接',
        ]);
        SelectionPhase::create([
            'msp_phase_name' => '2次面接',
        ]);
        SelectionPhase::create([
            'msp_phase_name' => '最終面接',
        ]);
    }
}
