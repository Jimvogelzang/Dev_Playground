<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('bedrijfsID');
            $table->string('klantnaam', 191);
            $table->mediumText('notitie');
            $table->integer('created_by_user');
            $table->timestamps();
            $table->integer('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notities');
    }
}
