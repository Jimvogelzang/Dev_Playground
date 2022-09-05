<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Item');
            $table->string('Code', 191);
            $table->string('CostPriceCurrency', 191);
            $table->decimal('CostPriceNew')->nullable();
            $table->decimal('CostPriceStandard');
            $table->string('Description', 191);
            $table->integer('Stock')->nullable();
            $table->string('Unit', 191);
            $table->timestamps();
            $table->string('guid', 200);
            $table->boolean('actief');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
