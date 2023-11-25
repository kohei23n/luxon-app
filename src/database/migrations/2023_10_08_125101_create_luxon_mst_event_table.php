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
        Schema::create('luxon_mst_event', function (Blueprint $table) {
            $table->increments('mev_event_id')->comment('イベントID');
            $table->unsignedInteger('mev_industry_id')->comment('業界ID');
            $table->unsignedInteger('mev_company_id')->nullable()->comment('会社ID');
            $table->string('mev_event_name', 50)->comment('イベント名');
            $table->string('mev_event_overview', 255)->comment('イベント概要');
            $table->string('mev_event_description', 255)->nullable()->comment('イベント詳細');
            $table->dateTime('mev_event_datetime')->comment('イベント日時');
            $table->string('mev_event_participate_url', 255)->comment('イベント参加URL');
            $table->string('mev_event_materials_url', 255)->nullable()->comment('イベント資料URL');
            $table->boolean('mev_temp_enabled', 255)->default(false)->comment('仮予約有効フラグ');
            $table->boolean('mev_delete_flag', 1)->default(false)->comment('削除フラグ');
            $table->dateTime('mev_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('mev_registration_datetime')->comment('登録日時');
            $table->dateTime('mev_update_datetime')->comment('更新日時');
            $table->timestamp('mev_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('mev_industry_id')->references('min_industry_id')->on('luxon_mst_industry');
            $table->foreign('mev_company_id')->references('mco_company_id')->on('luxon_mst_company');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('luxon_mst_event');
        Schema::enableForeignKeyConstraints();
    }
};
