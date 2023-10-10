<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'mco_industry_id' => '1',
            'mco_company_name' => '戦略コンサルA',
            'mco_company_logo_s3_url' => 'testurl',
            'mco_company_overview' => '戦略コンサルAの概要',
        ]);
        Company::create([
            'mco_industry_id' => '1',
            'mco_company_name' => '戦略コンサルB',
            'mco_company_logo_s3_url' => 'testurl',
            'mco_company_overview' => '戦略コンサルAの概要',
        ]);
        Company::create([
            'mco_industry_id' => '1',
            'mco_company_name' => '戦略コンサルC',
            'mco_company_logo_s3_url' => 'testurl',
            'mco_company_overview' => '戦略コンサルAの概要',
        ]);
        Company::create([
            'mco_industry_id' => '2',
            'mco_company_name' => '総合コンサルA',
            'mco_company_logo_s3_url' => 'testurl',
            'mco_company_overview' => '戦略コンサルAの概要',
        ]);
        Company::create([
            'mco_industry_id' => '2',
            'mco_company_name' => '総合コンサルB',
            'mco_company_logo_s3_url' => 'testurl',
            'mco_company_overview' => '戦略コンサルAの概要',
        ]);
    }
}
