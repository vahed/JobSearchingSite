<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseakerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('jobseaker_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('firstname',100);
            $table->string('lastname', 100);
            $table->string('last_job_title', 100);
            $table->string('email',100);
            $table->string('mobile', 50);
            $table->string('home_phone', 50);
            $table->string('address',100);
            $table->string('Postcode', 50);
            $table->string('gender', 10);
            $table->date('date_of_birth');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('jobseaker_profiles');
    }
}
