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
        Schema::create('luxon_trx_service_plan', function (Blueprint $table) {
            $table->increments('tsp_service_plan_id')->comment('サービスプランID');
            $table->unsignedInteger('tsp_user_id')->comment('ユーザーID');
            $table->string('tsp_service_plan_name', 50)->comment('利用プラン名');
            $table->integer('tsp_subscribe_price')->comment('利用プラン金額');
            $table->unsignedInteger('tsp_event_attendance')->comment('イベント回数');
            $table->unsignedInteger('tsp_interview_count')->comment('面談回数');
            $table->unsignedInteger('tsp_case_study_count')->comment('ケース面接対策');
            $table->string('tsp_service_plan_month', 50)->comment('サービス対象月');
            $table->char('tsp_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('tsp_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('tsp_registration_datetime')->comment('登録日時');
            $table->dateTime('tsp_update_datetime')->comment('更新日時');
            $table->timestamp('tsp_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('luxon_trx_service_plan');
        Schema::enableForeignKeyConstraints();
    }
};
