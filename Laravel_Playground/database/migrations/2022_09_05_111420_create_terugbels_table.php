<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerugbelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terugbels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link', 191);
            $table->integer('inboeker');
            $table->integer('ontvanger');
            $table->string('description', 191)->nullable();
            $table->string('phonenumber', 191)->nullable();
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
        Schema::dropIfExists('terugbels');
    }
}
