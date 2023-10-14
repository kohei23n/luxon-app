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
            $table->increments('mes_es_id')->comment('ESID');
            $table->unsignedInteger('mes_user_id')->comment('回答者のユーザーID');
            // $table->unsignedInteger('mes_industry_id')->comment('業界ID');
            $table->unsignedInteger('mes_company_id')->comment('会社ID');
            $table->string('mes_es_url', 150)->comment('ESのドキュメントURL');
            $table->char('mes_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('mes_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('mes_registration_datetime')->comment('登録日時');
            $table->dateTime('mes_update_datetime')->comment('更新日時');
            $table->timestamp('mes_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('mes_user_id')->references('mus_user_id')->on('luxon_mst_user');
            // $table->foreign('mes_industry_id')->references('min_industry_id')->on('luxon_mst_industry');
            $table->foreign('mes_company_id')->references('mco_company_id')->on('luxon_mst_company');
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
