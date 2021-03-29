<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subaccounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subaccount_id')->nullable()->comment('from rave');
            $table->unsignedBigInteger('account_id')->nullable()->comment('from rave');

            $table->string('account_bank')->nullable(); // bank code - list available online
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('country')->nullable();

            $table->float('split_value')->nullable();
            $table->string('split_type')->nullable(); // percentage

            $table->string('business_name')->nullable()->comment('this should probably be students name');
            $table->string('business_mobile')->nullable();
            $table->string('business_email')->nullable();
            $table->string('business_contact')->nullable();
            $table->boolean('business_contact_mobile')->nullable();

            $table->text('meta')->nullable();
            $table->string('settlement_schedule')->nullable();
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
        Schema::dropIfExists('subaccounts');
    }
}
