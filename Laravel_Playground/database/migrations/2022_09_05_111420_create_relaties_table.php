<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relaties', function (Blueprint $table) {
            $table->increments('PersonID');
            $table->integer('CONTID');
            $table->integer('CUSTID')->nullable();
            $table->integer('VENDID')->nullable();
            $table->string('NAAM', 191)->fulltext('NAAM');
            $table->integer('CONT')->nullable();
            $table->integer('VEND')->nullable();
            $table->integer('ACTIVE')->nullable();
            $table->string('PHONE1', 191)->nullable();
            $table->string('PHONE2', 191)->nullable();
            $table->string('FAX1', 191)->nullable();
            $table->string('FAX2', 191)->nullable();
            $table->string('EMAIL', 191)->nullable();
            $table->string('WWW', 191)->nullable();
            $table->integer('inactive');
            $table->integer('nable_id')->nullable();
            $table->timestamps();
            $table->integer('uptime_robot_id')->nullable();
            $table->integer('exact')->default(0);
            $table->string('exactid', 200);
            $table->string('routitid', 200);
            $table->string('extraexact');
            $table->dateTime('enddate')->nullable();
            $table->dateTime('lastexactsync');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relaties');
    }
}
