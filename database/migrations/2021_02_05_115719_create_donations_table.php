<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('request_id')->index();
            $table->unsignedBigInteger('transaction_id')->index();

            $table->unsignedBigInteger('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('description')->nullable();
            $table->text('additinal_info')->nullable();

            $table->string('donor_type')->nullable()->comment('user, guest, anonymous');
            $table->string('donor_name')->nullable();
            $table->string('donor_email')->nullable();
            $table->string('donor_address')->nullable();
            $table->text('donor_payload')->nullable();
            $table->string('donor_phone')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('request_id')->references('id')->on('requests');
            // $table->foreign('transaction_id')->references('id')->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
