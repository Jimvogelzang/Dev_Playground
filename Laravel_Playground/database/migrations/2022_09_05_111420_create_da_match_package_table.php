<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaMatchPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('da_match_package', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exact_product_id', 191)->nullable();
            $table->string('exact_string', 191)->nullable();
            $table->string('name', 191)->nullable();
            $table->string('dapackage', 191)->nullable();
            $table->string('type', 100)->nullable();
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
        Schema::dropIfExists('da_match_package');
    }
}
