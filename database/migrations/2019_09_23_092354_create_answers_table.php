<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //! Refactoring with Foreign K https://www.larashout.com/introducing-one-to-many-relationship-in-laravel
        Schema::create('answers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')
                ->references('id')->on('posts');
            $table->integer('answer_author_id')->unsigned();
            $table->foreign('answer_author_id')
                ->references('id')->on('users');
            $table->boolean('best_answer')->default(false);
            $table->string('title');
            $table->string('body', 2000);
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
        Schema::dropIfExists('answers');
    }
}
