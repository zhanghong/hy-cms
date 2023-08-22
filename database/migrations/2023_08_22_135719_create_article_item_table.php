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
        Schema::create('article_item', function (Blueprint $table) {
            $table->id();
            $table->string('editor_type', 15)->default('')->nullable(false)->comment('更新用户类型');
            $table->unsignedBigInteger('editor_id')->default(0)->nullable(false)->comment('更新用户ID');
            $table->char('lang', 5)->default('')->nullable(false)->comment('语言版本');
            $table->char('platform', 10)->default('')->nullable(false)->comment('展示平台');
            $table->string('no', 50)->default('')->nullable(false)->comment('Name');
            $table->string('title', 150)->default('')->nullable(false)->comment('标题');
            $table->string('title_color', 7)->default('')->nullable(false)->comment('标题显示色号');
            $table->string('sub_title', 200)->default('')->nullable(false)->comment('副标题');
            $table->string('sub_title_color', 7)->default('')->nullable(false)->comment('副标题显示色号');
            $table->unsignedBigInteger('category_id')->default(0)->nullable(false)->comment('分类ID');
            $table->unsignedBigInteger('referer_id')->default(0)->nullable(false)->comment('来源ID');
            $table->string('description', 250)->default('')->nullable(false)->comment('摘要信息');
            $table->dateTime('published_at')->nullable(true)->comment('发布时间');
            $table->unsignedBigInteger('pc_list_image_id')->default(0)->nullable(false)->comment('PC列表缩略图ID');
            $table->string('pc_list_image_path', 100)->default('')->nullable(false)->comment('PC列表缩略图路径');
            $table->unsignedBigInteger('wap_list_image_id')->default(0)->nullable(false)->comment('WAP列表缩略图ID');
            $table->string('wap_list_image_path', 100)->default('')->nullable(false)->comment('WAP列表缩略图路径');
            $table->unsignedBigInteger('view_count')->default(0)->nullable(false)->comment('浏览次数');
            $table->unsignedInteger('sort')->default(99)->nullable(false)->comment('排序编号');
            $table->boolean('has_attachmentes')->default(false)->nullable(false)->comment('是否有附件');
            $table->boolean('is_enabled')->default(false)->nullable(false)->comment('是否启用');
            $table->boolean('is_recommended')->default(false)->nullable(false)->comment('是否推荐');
            $table->timestamps();
            $table->softDeletes()->comment('删除时间');
            $table->index(['lang', 'platform', 'category_id'], 'idx-by-lg-pt-category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_item');
    }
};
