<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExactJaarAbboCheckerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exact_jaar_abbo_checker', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exactid', 191)->nullable();
            $table->string('exactnr', 191)->nullable();
            $table->string('description', 191)->nullable();
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
        Schema::dropIfExists('exact_jaar_abbo_checker');
    }
}
