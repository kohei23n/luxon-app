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
            $table->increments('tca_case_id')->comment('ケースID');
            $table->unsignedInteger('tca_user_id')->comment('回答者のユーザーID');
            $table->unsignedInteger('tca_mentor_id')->nullable()->comment('メンターのユーザーID');
            $table->string('tca_case_content', 255)->comment('ケース内容');
            $table->unsignedInteger('tca_case_time')->comment('ケース思考時間');
            $table->string('tca_case_url', 150)->comment('ケースのドキュメントURL');
            $table->boolean('tca_is_returned')->default(false)->comment('返却フラグ');
            $table->boolean('tca_delete_flag', 1)->default(false)->comment('削除フラグ');
            $table->dateTime('tca_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('tca_registration_datetime')->comment('登録日時');
            $table->dateTime('tca_update_datetime')->comment('更新日時');
            $table->timestamp('tca_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('tca_user_id')->references('mus_user_id')->on('luxon_mst_user');
            $table->foreign('tca_mentor_id')->references('mme_mentor_id')->on('luxon_mst_mentor');
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
