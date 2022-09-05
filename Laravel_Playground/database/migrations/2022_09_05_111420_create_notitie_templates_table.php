<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotitieTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notitie_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('template_name', 191);
            $table->longText('template');
            $table->unsignedInteger('created_by')->index('notitie_templates_created_by_foreign');
            $table->unsignedInteger('updated_by')->index('notitie_templates_updated_by_foreign');
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
        Schema::dropIfExists('notitie_templates');
    }
}
