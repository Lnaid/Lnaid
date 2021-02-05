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
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('amount')->nullable();
            $table->string('description')->nullable();
            $table->string('additinal_info')->nullable();
            $table->string('transaction_type')->nullable(); //bank, paystack page, abeg, cash app etc
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('request_id')->references('id')->on('requests');
            $table->foreign('user_id')->references('id')->on('users');
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
