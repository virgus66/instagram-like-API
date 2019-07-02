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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('caption');
            $table->string('image');
            $table->timestamps();

            $table->index('user_id');
            // Adding index() is a way to say to the Laravel Migration to add indices to that column, in order to get faster 
            // results when searching through that particular column. It's a common procedure in DB design when building tables. 
            // Just "index" some particular columns if you plan to make searchs in the table using those columns.
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
