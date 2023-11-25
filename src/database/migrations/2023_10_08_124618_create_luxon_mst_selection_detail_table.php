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
        Schema::create('luxon_mst_selection_detail', function (Blueprint $table) {
            $table->increments('msd_selection_detail_id')->comment('選考詳細ID');
            $table->unsignedInteger('msd_industry_id')->comment('業界ID');
            $table->unsignedInteger('msd_company_id')->comment('会社ID');
            $table->unsignedInteger('msd_selection_phase_id')->comment('選考段階名');
            $table->string('msd_selection_detail', 10000)->comment('選考詳細');
            $table->string('msd_selection_materials_url')->nullable()->comment('選考資料URL');
            $table->boolean('msd_delete_flag', 1)->default(false)->comment('削除フラグ');
            $table->dateTime('msd_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('msd_registration_datetime')->comment('登録日時');
            $table->dateTime('msd_update_datetime')->comment('更新日時');
            $table->timestamp('msd_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('msd_industry_id')->references('min_industry_id')->on('luxon_mst_industry');
            $table->foreign('msd_company_id')->references('mco_company_id')->on('luxon_mst_company');
            $table->foreign('msd_selection_phase_id')->references('msp_phase_id')->on('luxon_mst_selection_phase');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luxon_mst_selection_detail');
    }
};
