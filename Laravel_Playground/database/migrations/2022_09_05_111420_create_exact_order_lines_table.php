<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExactOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exact_order_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exact_order_id', 191);
            $table->integer('OrderId');
            $table->string('OrderLineId', 191);
            $table->string('ItemCode', 191);
            $table->integer('Discount');
            $table->decimal('UnitPrice');
            $table->string('ItemDescription', 191);
            $table->integer('quantity');
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
        Schema::dropIfExists('exact_order_lines');
    }
}
