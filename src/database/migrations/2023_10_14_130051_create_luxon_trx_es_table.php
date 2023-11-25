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
        Schema::create('luxon_trx_es', function (Blueprint $table) {
            $table->increments('tes_es_id')->comment('ESID');
            $table->unsignedInteger('tes_user_id')->comment('回答者のユーザーID');
            $table->unsignedInteger('tes_mentor_id')->nullable()->comment('メンターのユーザーID');
            $table->string('tes_company_name', 50)->comment('会社名');
            $table->string('tes_es_url', 100)->comment('ESのドキュメントURL');
            $table->boolean('tes_is_returned')->default(false)->comment('返却フラグ');
            $table->boolean('tes_delete_flag', 1)->default(false)->comment('削除フラグ');
            $table->dateTime('tes_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('tes_registration_datetime')->comment('登録日時');
            $table->dateTime('tes_update_datetime')->comment('更新日時');
            $table->timestamp('tes_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('tes_user_id')->references('mus_user_id')->on('luxon_mst_user');
            $table->foreign('tes_mentor_id')->references('mus_user_id')->on('luxon_mst_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luxon_trx_es');
    }
};
