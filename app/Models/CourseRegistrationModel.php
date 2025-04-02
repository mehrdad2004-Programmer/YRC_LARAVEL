<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseRegistrationModel extends Model
{
    protected $table = "course_registration";
    protected $fillable = [
        "fname",
        "lname",
        "id_no",
        "st_no",
        "phone_no",
        "course_code",
        "date",
        "time",
        "tracking_code"
    ];
}
