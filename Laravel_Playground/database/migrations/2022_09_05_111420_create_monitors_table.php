<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url', 191)->unique();
            $table->boolean('uptime_check_enabled')->default(true);
            $table->string('look_for_string', 191)->default('');
            $table->string('uptime_check_interval_in_minutes', 191)->default('5');
            $table->string('uptime_status', 191)->default('not yet checked');
            $table->string('uptime_check_failure_reason', 191)->default('');
            $table->integer('uptime_check_times_failed_in_a_row')->default(0);
            $table->timestamp('uptime_status_last_change_date')->nullable();
            $table->timestamp('uptime_last_check_date')->nullable();
            $table->timestamp('uptime_check_failed_event_fired_on_date')->nullable();
            $table->string('uptime_check_method', 191)->default('get');
            $table->text('uptime_check_payload')->nullable();
            $table->text('uptime_check_additional_headers')->nullable();
            $table->string('uptime_check_response_checker', 191)->nullable();
            $table->boolean('certificate_check_enabled')->default(false);
            $table->string('certificate_status', 191)->default('not yet checked');
            $table->timestamp('certificate_expiration_date')->nullable();
            $table->string('certificate_issuer', 191)->nullable();
            $table->string('certificate_check_failure_reason', 191)->default('');
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
        Schema::dropIfExists('monitors');
    }
}
