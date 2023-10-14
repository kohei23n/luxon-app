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
        Schema::create('luxon_trx_case', function (Blueprint $table) {
            $table->increments('mca_case_id')->comment('ケースID');
            $table->unsignedInteger('mca_case_user_id')->comment('回答者のユーザーID');
            $table->string('mca_case_content', 255)->comment('ケース内容');
            $table->unsignedInteger('mca_case_time')->comment('ケース思考時間');
            $table->string('mca_case_url', 150)->comment('ケースのドキュメントURL');
            $table->char('mca_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('mca_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('mca_registration_datetime')->comment('登録日時');
            $table->dateTime('mca_update_datetime')->comment('更新日時');
            $table->timestamp('mca_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('mca_case_user_id')->references('mus_user_id')->on('luxon_mst_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luxon_trx_case');
    }
};