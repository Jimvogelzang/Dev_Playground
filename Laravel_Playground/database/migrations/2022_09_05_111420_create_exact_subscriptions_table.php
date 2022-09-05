<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExactSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exact_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('BlockEntry', 191)->nullable();
            $table->date('CancellationDate')->nullable();
            $table->string('Classification', 191)->nullable();
            $table->string('ClassificationCode', 191)->nullable();
            $table->string('ClassificationDescription', 191)->nullable();
            $table->date('Created')->nullable();
            $table->string('Creator', 191)->nullable();
            $table->string('CreatorFullName', 191)->nullable();
            $table->string('Currency', 191)->nullable();
            $table->string('CustomerPONumber', 191)->nullable();
            $table->string('Description', 191)->nullable();
            $table->string('Division', 191)->nullable();
            $table->string('EndDate', 191)->nullable();
            $table->string('EntryID', 191)->nullable();
            $table->string('InvoiceDay', 191)->nullable();
            $table->date('InvoicedTo')->nullable();
            $table->string('InvoiceTo', 191)->nullable();
            $table->string('InvoiceToName', 191)->nullable();
            $table->string('InvoiceToContactPerson', 191)->nullable();
            $table->string('InvoiceToContactPersonFullName', 191)->nullable();
            $table->date('InvoicingStartDate')->nullable();
            $table->date('Modified')->nullable();
            $table->string('Modifier', 191)->nullable();
            $table->string('ModifierFullName', 191)->nullable();
            $table->string('OrderedBy', 191)->nullable();
            $table->string('OrderedByName', 191)->nullable();
            $table->string('OrderedByContactPerson', 191)->nullable();
            $table->string('OrderedByContactPersonFullName', 191)->nullable();
            $table->string('Notes', 191)->nullable();
            $table->string('Number', 191)->nullable();
            $table->string('PaymentCondition', 191)->nullable();
            $table->string('PaymentConditionDescription', 191)->nullable();
            $table->string('Printed', 191)->nullable();
            $table->string('ReasonCancelled', 191)->nullable();
            $table->string('ReasonCancelledCode', 191)->nullable();
            $table->string('ReasonCancelledDescription', 191)->nullable();
            $table->string('StartDate', 191)->nullable();
            $table->string('SubscriptionType', 191)->nullable();
            $table->string('SubscriptionTypeCode', 191)->nullable();
            $table->string('SubscriptionTypeDescription', 191)->nullable();
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
        Schema::dropIfExists('exact_subscriptions');
    }
}
