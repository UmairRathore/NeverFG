<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMilestone extends Model
{
    use HasFactory;

    protected $table = "user_milestones";

    protected $fillable =
        [
            'milestone',
            'year',

        ];
}
