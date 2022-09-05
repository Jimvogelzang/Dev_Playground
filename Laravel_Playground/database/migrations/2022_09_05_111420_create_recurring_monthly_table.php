<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringMonthlyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring_monthly', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recurring_id');
            $table->string('option', 191);
            $table->integer('days')->nullable();
            $table->integer('amount_of_months');
            $table->integer('interval')->nullable();
            $table->integer('day_of_week')->nullable();
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
        Schema::dropIfExists('recurring_monthly');
    }
}
