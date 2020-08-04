<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseakerSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseaker_skills', function (Blueprint $table) {
            $table->increments('jobseekerProfile_id');
            $table->string('job_title', 50);
            $table->string('current_job_status',50);
            $table->longText('cover_letter',1000);
            $table->string('languages',50);
            $table->string('latest_qualification',100);
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
        Schema::dropIfExists('jobseaker_skills');
    }
}
