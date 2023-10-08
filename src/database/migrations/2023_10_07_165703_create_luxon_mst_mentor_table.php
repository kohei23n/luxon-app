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
            $table->string('mme_email_address', 50)->comment('メールアドレス');
            $table->string('mme_password', 255)->comment('パスワード');
            $table->string('mme_first_name', 50)->comment('メンター名');
            $table->string('mme_last_name', 50)->comment('メンター姓');
            $table->integer('mme_interview_salary')->comment('面談給与');
            $table->integer('mme_lecture_create_salary')->comment('講義作成給与');
            $table->integer('mme_lecture_salary')->comment('講義給与');
            $table->char('mme_access_right', 1)->default('0')->comment('閲覧権限');
            $table->char('mme_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('mme_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('mme_registration_datetime')->comment('登録日時');
            $table->dateTime('mme_update_datetime')->comment('更新日時');
            $table->timestamp('mme_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');
            $table->string('mme_line_url', 150)->nullable()->comment('LINE URL');
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
