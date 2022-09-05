<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_feed', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('call_id')->nullable();
            $table->unsignedInteger('reaction_id')->nullable();
            $table->unsignedInteger('post_id')->nullable();
            $table->unsignedInteger('notitie_id')->nullable();
            $table->unsignedInteger('system_update_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('relation_id')->nullable();
            $table->unsignedInteger('contact_id')->nullable();
            $table->timestamps();
            $table->string('category', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_feed');
    }
}
