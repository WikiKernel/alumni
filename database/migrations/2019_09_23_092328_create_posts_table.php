<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unique();
            $table->timestamps();
            $table->integer('post_author_id')->unsigned()->nullable();
            $table->foreign('post_author_id')
                ->references('id')->on('users');
            $table->string('title');
            $table->string('body', 10000);
            $table->boolean('has_answer')->default(false);
            $table->boolean('has_project')->default(false);
            $table->boolean('is_resolved')->default(false);
            $table->boolean('deleted')->default(false);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
