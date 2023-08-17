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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('editor_type', 10)->default('')->nullable(false)->comment('更新用户类型');
            $table->unsignedBigInteger('editor_id')->default(0)->nullable(false)->comment('更新用户ID');
            $table->string('name', 50)->default('')->nullable(false)->comment('登录名');
            $table->string('nickname', 50)->default('')->nullable(false)->comment('昵称');
            $table->string('real_name', 50)->default('')->nullable(false)->comment('真实姓名');
            $table->string('email', 50)->default('')->nullable(false)->comment('登录邮箱');
            $table->string('phone', 50)->default('')->nullable(false)->comment('登录手机');
            $table->string('avatar_path', 150)->default('')->nullable(false)->comment('头像URL');
            $table->string('password', 60)->default('')->nullable(false)->comment('登录密码');
            $table->boolean('is_authed')->default(false)->nullable(false)->comment('是否已认证');
            $table->boolean('is_locked')->default(false)->nullable(false)->comment('是否已锁定');
            $table->dateTime('locked_at')->default(null)->nullable(true)->comment('锁定时间');
            $table->unsignedBigInteger('last_login_id')->default(0)->nullable(false)->comment('最新登录ID');
            $table->dateTime('last_login_at')->nullable(true)->comment('最新登录时间');
            $table->boolean('is_deleted')->default(false)->nullable(false)->comment('是否删除');
            $table->datetimes();
            $table->dateTime('deleted_at')->nullable(true)->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
