<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 191);
            $table->string('ext', 191);
            $table->string('callNumber', 191);
            $table->integer('bedrijfID');
            $table->string('relatienaam', 191);
            $table->string('contactnaam', 191)->nullable();
            $table->integer('contact_id')->nullable();
            $table->integer('type');
            $table->timestamp('duration')->nullable();
            $table->timestamp('callStart')->default('0000-00-00 00:00:00');
            $table->timestamp('callTerminated')->nullable();
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
        Schema::dropIfExists('calls');
    }
}
