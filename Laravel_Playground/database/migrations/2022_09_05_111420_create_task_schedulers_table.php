<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskSchedulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_schedulers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerid');
            $table->string('taskname', 191);
            $table->mediumText('body');
            $table->integer('status');
            $table->string('frequency', 191);
            $table->string('subject', 191);
            $table->string('category', 191);
            $table->integer('interval');
            $table->boolean('active');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->dateTime('last_schedule')->nullable();
            $table->dateTime('next_schedule')->nullable();
            $table->string('assigned_to');
            $table->boolean('is_delete');
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
        Schema::dropIfExists('task_schedulers');
    }
}
