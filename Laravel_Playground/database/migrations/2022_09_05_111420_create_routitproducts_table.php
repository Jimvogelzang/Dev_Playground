<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutitproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routitproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductCode', 191)->nullable();
            $table->string('ProductName', 191)->nullable();
            $table->string('ContractDuration', 191)->nullable();
            $table->string('GrossPricePartner', 191)->nullable();
            $table->string('SetupCosts', 191)->nullable();
            $table->string('SlaLevel', 191)->nullable();
            $table->string('ProductType', 191)->nullable();
            $table->string('DiscountPercentage', 191)->nullable();
            $table->string('CommercialProductTypeName', 191)->nullable();
            $table->string('ProductGroup', 191)->nullable();
            $table->string('CancelCosts', 191)->nullable();
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
        Schema::dropIfExists('routitproducts');
    }
}
