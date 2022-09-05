<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringMonthlyOption2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring_monthly_option_2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recurring_id');
            $table->integer('option');
            $table->integer('days');
            $table->integer('weekday');
            $table->integer('amount_of_months');
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
        Schema::dropIfExists('recurring_monthly_option_2');
    }
}
