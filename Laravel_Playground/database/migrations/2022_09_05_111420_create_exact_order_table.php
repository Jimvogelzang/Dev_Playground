<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExactOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exact_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('InvoiceTo', 191);
            $table->string('OrderedBy', 191);
            $table->decimal('AmountDC');
            $table->string('OrderID', 191);
            $table->integer('OrderNumber');
            $table->integer('PostId');
            $table->integer('Status');
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
        Schema::dropIfExists('exact_order');
    }
}
