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
            'tes_user_id' => 4,
            'tes_company_name' => '株式会社テスト',
            'tes_es_url' => 'https://www.google.com/',
        ]);

        EsQuestion::create([
            'tes_user_id' => 4,
            'tes_company_name' => '株式会社テスト2',
            'tes_es_url' => 'https://www.google2.com/',
        ]);
    }
}
