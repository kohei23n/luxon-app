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
        Schema::create('luxon_mst_mentor', function (Blueprint $table) {
            $table->increments('mme_mentor_id')->comment('メンターID');
            $table->unsignedInteger('mme_user_id')->comment('ユーザーID');
            $table->integer('mme_interview_salary')->nullable()->comment('面談給与');
            $table->integer('mme_lecture_create_salary')->nullable()->comment('講義作成給与');
            $table->integer('mme_lecture_salary')->nullable()->comment('講義給与');
            $table->string('mme_line_url', 150)->nullable()->comment('LINE URL');
            $table->string('mme_timerex_url', 150)->nullable()->comment('TimeRex URL 60分');
            $table->string('mme_timerex_url_short', 150)->nullable()->comment('TimeRex URL 20分');
            $table->char('mme_access_right', 1)->default('0')->comment('閲覧権限');
            $table->char('mme_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('mme_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('mme_registration_datetime')->comment('登録日時');
            $table->dateTime('mme_update_datetime')->comment('更新日時');
            $table->timestamp('mme_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');

            $table->foreign('mme_user_id')->references('mus_user_id')->on('luxon_mst_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('luxon_mst_mentor');
        Schema::enableForeignKeyConstraints();
    }
};
