<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('luxon_mst_company', function (Blueprint $table) {
            $table->increments('mco_company_id')->comment('会社ID');
            $table->unsignedInteger('mco_industry_id')->comment('業界ID');
            $table->string('mco_company_name')->comment('会社名');
            $table->string('mco_company_logo_s3_url')->comment('会社ロゴS3 URL');
            $table->text('mco_company_overview')->comment('会社概要');
            $table->boolean('mco_delete_flag', 1)->default(false)->comment('削除フラグ');
            $table->dateTime('mco_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('mco_registration_datetime')->comment('登録日時');
            $table->dateTime('mco_update_datetime')->comment('更新日時');
            $table->timestamp('mco_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('mco_industry_id')->references('min_industry_id')->on('luxon_mst_industry');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('luxon_mst_company');
        Schema::enableForeignKeyConstraints();
    }
};
