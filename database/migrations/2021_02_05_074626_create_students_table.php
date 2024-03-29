<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('school_id')->nullable();

            $table->string('gender')->nullable();
            $table->string('pronoun')->nullable();
            $table->string('dob')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();

            $table->double('wallet_balance', 8,2)->default(0);

            //$table->string('course')->nullable();
            $table->string('department')->nullable();
            $table->string('falculty')->nullable();
            $table->string('program_type')->nullable(); //undergraduate, postgraduate
            $table->integer('level')->nullable();
            $table->string('matric_no')->nullable();
            $table->string('admission_year')->nullable();
            $table->string('graduation_year')->nullable();
            $table->string('schol_email')->nullable();
            $table->text('program_duration')->nullable(); //rich text here

            $table->text('aboutme')->nullable(); //rich text here
            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();


            // bank account details
            $table->string('bank_name')->nullable();  // this should be a list
            $table->string('bank_code')->nullable(); // added based on the bank selected
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();


            $table->string('bvn')->nullable();
            $table->string('nin')->nullable();
            $table->string('school_id_path')->nullable();
            $table->string('admission_letter_path')->nullable();
            $table->string('transcript_letter_path')->nullable();


            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
