<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuglistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buglists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->text('bug_titel');
            $table->mediumText('bug_onderwerp');
            $table->string('bug_screenshot', 191);
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
        Schema::dropIfExists('buglists');
    }
}
