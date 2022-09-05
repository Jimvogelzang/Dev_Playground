<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNotitieTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_notitie_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('template_name', 191);
            $table->longText('template');
            $table->unsignedInteger('belongs_to_user')->index('user_notitie_templates_belongs_to_user_foreign');
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
        Schema::dropIfExists('user_notitie_templates');
    }
}
