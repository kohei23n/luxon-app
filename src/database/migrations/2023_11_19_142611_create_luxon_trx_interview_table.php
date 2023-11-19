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
        Schema::create('luxon_trx_interview', function (Blueprint $table) {

            $table->increments('tin_interview_id')->comment('面接ID');
            $table->unsignedInteger('tin_user_id')->comment('回答者のユーザーID');
            $table->unsignedInteger('tin_mentor_id')->nullable()->comment('メンターのユーザーID');
            $table->dateTime('tin_datetime')->comment('面接日時');
            $table->unsignedInteger('tin_time')->comment('面接時間');
            $table->boolean('tin_is_completed')->default(false)->comment('完了フラグ');
            $table->char('tin_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('tin_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('tin_registration_datetime')->comment('登録日時');
            $table->dateTime('tin_update_datetime')->comment('更新日時');
            $table->timestamp('tin_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('tin_user_id')->references('mus_user_id')->on('luxon_mst_user');
            $table->foreign('tin_mentor_id')->references('mus_user_id')->on('luxon_mst_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luxon_trx_interview');
    }
};
