<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 182);
            $table->string('middlename', 182);
            $table->string('lastname', 182);
            $table->string('name', 191);
            $table->string('email', 191)->unique();
            $table->string('password', 191);
            $table->integer('privilage');
            $table->rememberToken();
            $table->timestamps();
            $table->string('callerID', 192)->nullable();
            $table->tinyInteger('inactive');
            $table->dateTime('last_login');
            $table->string('picture_location', 191)->nullable();
            $table->string('job_title', 191)->nullable();
            $table->string('internal_number', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
