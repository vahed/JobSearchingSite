<?php

use Illuminate\Database\Seeder;
use App\JobseakerSkills;

class JobseakerSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsSkills = new JobseakerSkills;
        //$jsSkills->user_id = 1;
        $jsSkills->job_title = "Programmer";
        $jsSkills->current_job_status = "Job seeker";
        $jsSkills->cover_letter = 'This is my coversing letter';
        $jsSkills->languages = 'Farsi, English, Kurdish';
        $jsSkills->latest_qualification= 'MSc Software engineering';
        $jsSkills->timestamps;
        $jsSkills->save();
    }
}
