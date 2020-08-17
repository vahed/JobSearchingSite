<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseakerProfile extends Model

{
    protected $fillable = [
        'firstname',
        'lastname',
        'last_job_title',
        'email',
        'mobile',
        'home_phone',
        'address',
        'Postcode',
        'gender',
        'date_of_birth'
    ];
}
