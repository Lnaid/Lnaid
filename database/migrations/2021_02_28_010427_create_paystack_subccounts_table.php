<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaystackSubccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paystack_subaccounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('account_id')->comment('from paystack');


            $table->string('integration')->nullable();
            $table->string('domain')->nullable();
            $table->string('subaccount_code')->nullable();
            $table->string('business_name')->nullable()->comment('this should probably be students account');
            $table->string('description')->nullable();
            $table->string('primary_contact_name')->nullable();
            $table->string('primary_contact_email')->nullable();
            $table->string('primary_contact_phone')->nullable();
            $table->string('percentage_charge')->nullable();
            $table->boolean('is_verified')->nullable();
            $table->string('settlement_bank')->nullable();
            $table->string('account_number')->nullable();
            $table->string('settlement_schedule')->nullable();
            $table->boolean('active')->nullable();
            $table->boolean('migrate')->nullable();
            $table->timestamps();

            $table->softDeletes();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paystack_subaccounts');
    }
}
