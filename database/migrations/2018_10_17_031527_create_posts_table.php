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
            $table->increments('id');
            $table->integer('kind_id');
            $table->integer('post_type_id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('ansi_title');
            $table->string('image');
            $table->text('description');
            $table->string('link');
            $table->integer('state');
            $table->integer('share');
            $table->string('author');
            $table->tinyInteger('is_completed');
            $table->timestamps();
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
