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
        Schema::create('luxon_trx_event_participate', function (Blueprint $table) {
            $table->increments('tep_event_participate_id')->comment('イベント参加者ID');
            $table->unsignedInteger('tep_event_id')->comment('イベントID');
            $table->unsignedInteger('tep_user_id')->comment('ユーザーID');
            $table->boolean('tep_is_temp', 1)->default(false)->comment('仮予約フラグ');
            $table->boolean('tep_delete_flag', 1)->default(false)->comment('削除フラグ');
            $table->dateTime('tep_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('tep_registration_datetime')->comment('登録日時');
            $table->dateTime('tep_update_datetime')->comment('更新日時');
            $table->timestamp('tep_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('tep_event_id')->references('mev_event_id')->on('luxon_mst_event');
            $table->foreign('tep_user_id')->references('mus_user_id')->on('luxon_mst_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luxon_trx_event_participate');
    }
};
