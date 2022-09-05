<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('user_id');
            $table->integer('bedrijfsID');
            $table->string('klantnaam', 191);
            $table->string('onderwerp', 191);
            $table->mediumText('body');
            $table->integer('category')->nullable();
            $table->string('status', 191);
            $table->string('prioriteit', 191);
            $table->string('bron', 191);
            $table->mediumText('notitie')->nullable();
            $table->string('cover_image', 191);
            $table->integer('created_by_user');
            $table->integer('assigned_to_user');
            $table->integer('task')->nullable();
            $table->timestamps();
            $table->dateTime('closed_at')->nullable();
            $table->integer('closed_by');
            $table->integer('contact_id')->nullable();
            $table->integer('active');
            $table->integer('disabled');
            $table->integer('vaste_prijs')->nullable();
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
