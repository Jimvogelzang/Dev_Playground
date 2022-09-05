<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExactSubscriptionLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exact_subscription_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AmountDC', 191)->nullable();
            $table->string('AmountFC', 191)->nullable();
            $table->string('Costcenter', 191)->nullable();
            $table->string('Costunit', 191)->nullable();
            $table->string('Description', 191)->nullable();
            $table->string('Discount', 191)->nullable();
            $table->string('Division', 191)->nullable();
            $table->string('EntryID', 191)->nullable();
            $table->date('FromDate')->nullable();
            $table->string('product_id', 191)->nullable();
            $table->string('Item', 191)->nullable();
            $table->string('ItemDescription', 191)->nullable();
            $table->integer('LineNumber')->nullable();
            $table->string('LineType', 191)->nullable();
            $table->string('LineTypeDescription', 191)->nullable();
            $table->string('NetPrice', 191)->nullable();
            $table->string('Notes', 191)->nullable();
            $table->string('Quantity', 191)->nullable();
            $table->date('ToDate')->nullable();
            $table->string('UnitCode', 191)->nullable();
            $table->string('UnitDescription', 191)->nullable();
            $table->string('UnitPrice', 191)->nullable();
            $table->string('VATAmountFC', 191)->nullable();
            $table->string('VATCode', 191)->nullable();
            $table->string('VATCodeDescription', 191)->nullable();
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
        Schema::dropIfExists('exact_subscription_lines');
    }
}
