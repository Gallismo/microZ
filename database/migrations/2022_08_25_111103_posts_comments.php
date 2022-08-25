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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string('title');
            $table->longText("body");
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("post_id");
            $table->string('name');
            $table->string('email');
            $table->longText("body");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("posts");
        Schema::dropIfExists("comments");
    }
};
