<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsreactieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postsreactie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('onderwerp', 191)->nullable();
            $table->mediumText('body')->nullable();
            $table->timestamps();
            $table->integer('post_id');
            $table->integer('user_id');
            $table->string('status', 191);
            $table->string('klantnaam', 191);
            $table->integer('bedrijfsID');
            $table->integer('category')->nullable();
            $table->string('bron', 191);
            $table->mediumText('notitie')->nullable();
            $table->integer('updated_by_user');
            $table->integer('created_by_user');
            $table->integer('type');
            $table->string('to_field', 191)->nullable();
            $table->integer('sub_post_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postsreactie');
    }
}
