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
        Schema::create('article_detail', function (Blueprint $table) {
            $table->id();
            $table->string('editor_type', 15)->default('')->nullable(false)->comment('更新用户类型');
            $table->unsignedBigInteger('editor_id')->default(0)->nullable(false)->comment('更新用户ID');
            $table->unsignedBigInteger('item_id')->default(0)->nullable(false)->comment('新闻ID')->unique();
            $table->unsignedBigInteger('pc_detail_image_id')->default(0)->nullable(false)->comment('PC详情缩略图ID');
            $table->string('pc_detail_image_path', 100)->default('')->nullable(false)->comment('PC详情缩略图路径');
            $table->unsignedBigInteger('wap_detail_image_id')->default(0)->nullable(false)->comment('WAP详情缩略图ID');
            $table->string('wap_detail_image_path', 100)->default('')->nullable(false)->comment('WAP详情缩略图路径');
            $table->string('seo_keywords', 100)->default('')->nullable(false)->comment('SEO Keywords');
            $table->string('seo_description', 300)->default('')->nullable(false)->comment('SEO Description');
            $table->string('preview_url', 200)->default('')->nullable(false)->comment('预览URL');
            $table->text('content')->comment('正文');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_detail');
    }
};
