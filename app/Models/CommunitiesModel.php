<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunitiesModel extends Model
{
    protected $table = "communities";

    protected $fillable = [
        "title",
        "code"
    ];
}
