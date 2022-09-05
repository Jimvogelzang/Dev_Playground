<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_calls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer');
            $table->integer('user');
            $table->string('phonenumber', 191);
            $table->string('time', 191);
            $table->string('information', 191);
            $table->timestamps();
            $table->boolean('archive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incoming_calls');
    }
}
