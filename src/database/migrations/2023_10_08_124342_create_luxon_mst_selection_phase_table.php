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
        Schema::create('luxon_mst_selection_phase', function (Blueprint $table) {
            $table->increments('msp_phase_id')->comment('選考段階ID');
            $table->string('msp_phase_name')->comment('選考段階名');
            $table->char('msp_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('msp_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('msp_registration_datetime')->comment('登録日時');
            $table->dateTime('msp_update_datetime')->comment('更新日時');
            $table->timestamp('msp_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('luxon_mst_selection_phase');
        Schema::enableForeignKeyConstraints();
    }
};
