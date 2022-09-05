<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klant_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('prioriteit')->nullable();
            $table->text('event');
            $table->integer('assigned_to')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('id_last_event')->nullable();
            $table->integer('post_id')->nullable();
            $table->timestamps();
            $table->text('status');
            $table->text('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_logs');
    }
}
