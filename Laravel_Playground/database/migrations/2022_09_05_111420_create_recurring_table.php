<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_of_post');
            $table->integer('if_assigned_to_users');
            $table->integer('option');
            $table->timestamp('last_trigger')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('next_trigger')->default('0000-00-00 00:00:00');
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
            $table->boolean('reaction')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurring');
    }
}
