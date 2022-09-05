<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserNotitieTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_notitie_templates', function (Blueprint $table) {
            $table->foreign(['belongs_to_user'])->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_notitie_templates', function (Blueprint $table) {
            $table->dropForeign('user_notitie_templates_belongs_to_user_foreign');
        });
    }
}
