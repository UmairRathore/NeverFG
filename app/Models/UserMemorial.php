<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMemorial extends Model
{
    use HasFactory;

    protected $table = 'user_memorials';
    protected $fillable =
        [
            'dod',
            'city_of_birth',
            'image',
            'biography',
            'fav_saying',
            'resting_place',
            'status',
            'user_id'
        ];
}
