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
        Schema::create('luxon_mst_industry', function (Blueprint $table) {
            $table->increments('min_industry_id')->comment('業界ID');
            $table->string('min_industry_name')->comment('業界名');
            $table->char('min_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('min_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('min_registration_datetime')->comment('登録日時');
            $table->dateTime('min_update_datetime')->comment('更新日時');
            $table->timestamp('min_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('luxon_mst_industry');
        Schema::enableForeignKeyConstraints();
    }
};
