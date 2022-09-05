<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendareventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarevents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('by_user', 100)->nullable();
            $table->string('to_user', 100)->nullable();
            $table->string('eventid')->nullable();
            $table->integer('note_id')->nullable();
            $table->integer('post_id')->nullable();
            $table->string('action', 191)->nullable();
            $table->string('type', 191)->nullable();
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->string('actie', 100);
            $table->dateTime('actietime');
            $table->string('actie_by', 50);
            $table->integer('reminder');
            $table->dateTime('moved_to')->nullable();
            $table->integer('parent_id')->nullable();
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
        Schema::dropIfExists('calendarevents');
    }
}
