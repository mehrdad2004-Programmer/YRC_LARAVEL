<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = "courses";
    protected $fillable = [
        "title",
        "duration",
        "teacher",
        "start_date",
        "amount",
        "poster",
        "community",
        "course_code"
    ];
}
