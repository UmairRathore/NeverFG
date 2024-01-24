<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAcademic extends Model
{
    use HasFactory;
    protected $table = "user_academics";

    protected $fillable =
        [
            'school',
            'diploma',
            'to_year',
            'from_year',

        ];
}
