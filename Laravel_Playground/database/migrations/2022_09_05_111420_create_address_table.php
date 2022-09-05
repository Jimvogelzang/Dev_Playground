<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('SOURCEID');
            $table->string('ZIPCODE', 191)->fulltext('ZIPCODE');
            $table->string('CITY', 191);
            $table->string('STREET', 191);
            $table->string('COUNTRY', 191);
            $table->integer('ADRTYPE');
            $table->integer('updated');
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
        Schema::dropIfExists('address');
    }
}
