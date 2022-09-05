<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendakoppelingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendakoppeling', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->string('ics_file', 191);
            $table->integer('created_by_user');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->string('title', 182);
            $table->timestamp('updated_at')->useCurrent();
            $table->string('address', 50);
            $table->string('description', 182);
            $table->timestamp('dstart')->nullable()->useCurrent();
            $table->timestamp('dend')->nullable()->useCurrent();
            $table->string('category', 191);
            $table->integer('invite');
            $table->boolean('active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendakoppeling');
    }
}
