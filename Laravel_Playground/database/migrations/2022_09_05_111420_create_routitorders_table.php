<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutitordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routitorders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OrderId', 191)->nullable();
            $table->string('ParentId', 191)->nullable();
            $table->string('CustomerId', 191)->nullable();
            $table->string('ProductId', 191)->nullable();
            $table->string('ProductName', 191)->nullable();
            $table->string('ProductGroup', 191)->nullable();
            $table->string('ProductCommercialTypeName', 191)->nullable();
            $table->dateTime('DateCreated')->nullable();
            $table->dateTime('DateActive')->nullable();
            $table->dateTime('DateModified')->nullable();
            $table->dateTime('DateTerminate')->nullable();
            $table->dateTime('DateTerminated')->nullable();
            $table->string('Label', 191)->nullable();
            $table->string('Attribute', 191)->nullable();
            $table->string('OrderState', 191)->nullable();
            $table->integer('Quantity')->nullable();
            $table->string('ServiceLevelAgreement', 191)->nullable();
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
        Schema::dropIfExists('routitorders');
    }
}
