<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klant_id');
            $table->integer('project_id')->nullable();
            $table->integer('user_id');
            $table->integer('ticket_id')->nullable();
            $table->integer('notitie_id')->nullable();
            $table->integer('postsreactie_id')->nullable();
            $table->string('facturatieregel', 191)->nullable();
            $table->string('artikel', 191)->nullable();
            $table->longText('beschrijving')->nullable();
            $table->integer('minutes');
            $table->integer('flag')->default(1);
            $table->timestamps();
            $table->integer('sub_post')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billables');
    }
}
