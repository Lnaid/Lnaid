<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_bank_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('paystack_subaccount_id')->nullable();

            $table->string('bvn')->nullable();
            $table->string('bank')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('currency_id');
            $table->integer('status')->default(0)->comment('0 = pending, 1 = verified, 2 = declined');
            $table->timestamps();

            $table->softDeletes();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('paystack_subaccount_id')->references('id')->on('paystack_subaccounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_bank_accounts');
    }
}
