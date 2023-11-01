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
        Schema::dropIfExists('users'); // 既存のusersテーブルを削除

        Schema::create('luxon_mst_user', function (Blueprint $table) {
            $table->increments('mus_user_id')->comment('ユーザーID');
            $table->string('mus_email_address', 50)->unique()->comment('メールアドレス');
            $table->string('mus_user_password', 255)->comment('ユーザーパスワード'); 
            $table->string('mus_user_first_name', 50)->nullable()->comment('ユーザー名');
            $table->string('mus_user_last_name', 50)->nullable()->comment('ユーザー姓');
            $table->unsignedInteger('mus_dedicated_mentor_id')->nullable()->comment('専属メンター');
            $table->boolean('mus_is_admin')->default(false)->comment('管理者フラグ');
            $table->boolean('mus_is_mentor')->default(false)->comment('メンターフラグ');
            $table->char('mus_access_right', 1)->default('0')->comment('閲覧権限');
            $table->char('mus_delete_flag', 1)->default('0')->comment('削除フラグ');
            $table->dateTime('mus_deletion_datetime')->nullable()->comment('削除日時');
            $table->dateTime('mus_registration_datetime')->useCurrent()->comment('登録日時');
            $table->dateTime('mus_update_datetime')->useCurrent()->comment('更新日時');
            $table->timestamp('mus_update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('システム更新日時');
            $table->rememberToken(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luxon_mst_user');
    }
};
