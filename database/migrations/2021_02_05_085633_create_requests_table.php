<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('school_id');

            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('amount')->nullable();
            $table->integer('category_id')->nullable();
            $table->boolean('is_fund_request');

            $table->string('priority')->nullable()->defualt('low'); //low, medium, high
            $table->boolean('is_featured')->nullable();
            $table->string('visibility')->nullable()->defualt('university'); //private or public - private defualts to university domain

            $table->text('description')->nullable();

            $table->unsignedBigInteger('currency_id')->nullable();

            $table->integer('status')->default(0)->comment('0 = pending, 1 = successful, 2 = failed');
            $table->timestamps();

            $table->softDeletes();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('school_id')->references('id')->on('schools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
