<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->longText('comment_contents');
            $table->string('posted_by');
            $table->foreignId('parent_id')->nullable()->constrained('comments');
            $table->foreignId('parent_post_id')->constrained('posts');
            $table->boolean('is_published')->default(false);
            $table->timestamps();
            $table->timestamp('published_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
