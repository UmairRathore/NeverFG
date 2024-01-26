<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOccupation extends Model
{
    use HasFactory;

    protected $table = "user_occupations";

    protected $fillable =
        [
            'occupation',
            'company',
            'from_year',
            'to_year',

        ];
}
