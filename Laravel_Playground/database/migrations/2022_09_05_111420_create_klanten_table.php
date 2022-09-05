<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlantenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klanten', function (Blueprint $table) {
            $table->increments('CPERSID');
            $table->integer('CONTID');
            $table->string('FIRSTNAME', 191);
            $table->string('MIDDLENAME', 191)->nullable();
            $table->string('LASTNAME', 191);
            $table->string('CONTNAME', 191);
            $table->string('PHONEWORK', 192)->nullable();
            $table->string('PHONEWORK2', 192)->nullable();
            $table->string('FAX', 192)->nullable();
            $table->string('FAX2', 192)->nullable();
            $table->string('CELLUAR', 192)->nullable();
            $table->string('CELLUAR2', 192)->nullable();
            $table->string('SKYPENAME', 191)->nullable();
            $table->string('EMAIL', 191)->nullable();
            $table->string('EMAIL2', 191)->nullable();
            $table->integer('INACTIV')->nullable();
            $table->string('WWW', 191)->nullable();
            $table->string('SynchronizationGUID', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klanten');
    }
}
