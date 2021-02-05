<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index();
            $table->string('type'); //individual, company, ngo, governmenet
            $table->string('name')->nullable();
            $table->string('slug')->nullable()->index();
            $table->text('address')->nullable();
            $table->text('about')->nullable(); //rich text here
            $table->string('email')->unique();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('website')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}
