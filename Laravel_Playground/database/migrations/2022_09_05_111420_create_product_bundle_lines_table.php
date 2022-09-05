<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBundleLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_bundle_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_bundle_id', 191)->nullable();
            $table->string('product_name', 200);
            $table->string('exact_product_id', 191)->nullable();
            $table->string('routitid')->nullable();
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
        Schema::dropIfExists('product_bundle_lines');
    }
}
