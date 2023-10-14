<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EsQuestion;

class EsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EsQuestion::create([
            'mes_user_id' => 1,
            // 'mes_industry_id' => 1,
            'mes_company_id' => 1,
            'mes_es_url' => 'https://www.google.com/',
        ]);

        EsQuestion::create([
            'mes_user_id' => 1,
            // 'mes_industry_id' => 1,
            'mes_company_id' => 2,
            'mes_es_url' => 'https://www.google2.com/',
        ]);
    }
}
