<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('post_reaction_id');
            $table->string('onderwerp', 191);
            $table->integer('status');
            $table->string('body', 191);
            $table->integer('vasteprijs')->nullable();
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
        Schema::dropIfExists('sub_posts');
    }
}
