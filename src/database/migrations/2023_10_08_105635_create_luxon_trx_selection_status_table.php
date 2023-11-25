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
        Schema::create('luxon_trx_selection_status', function (Blueprint $table) {
            $table->increments('tss_selection_status_id')->comment('選考状況ID');
            $table->unsignedInteger('tss_user_id')->comment('ユーザーID');
            $table->string('tss_company_name', 50)->comment('企業名');
            $table->string('tss_selection_status', 50)->comment('選考ステータス');
            $table->integer('tss_preference_ranking')->comment('志望順位');
            $table->dateTime('tss_selection_date')->comment('選考日時');
            $table->boolean('tss_delete_flag', 1)->default(false)->comment('削除フラグ');
            $table->dateTime('tss_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('tss_registration_datetime')->comment('登録日時');
            $table->dateTime('tss_update_datetime')->comment('更新日時');
            $table->timestamp('tss_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('tss_user_id')->references('mus_user_id')->on('luxon_mst_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luxon_trx_selection_status');
    }
};
