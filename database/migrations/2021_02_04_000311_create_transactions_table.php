<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status')->nullable()->comment('0 = success, 1 = failed 2 = refunded, 3 = declined');
            $table->string('reference_id')->nullable(); // bank, card etc
            $table->string('payment_type')->nullable(); // bank, card etc
            $table->string('payment_aggregator')->nullable(); //flutterwave, paystack paga, abeg, cash app etc
            $table->text('payment_payload')->nullable();
            $table->text('transaction_meta')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
