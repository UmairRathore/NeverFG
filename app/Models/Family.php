<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $table = 'families';
    protected $fillable = [
        'name', 'relation', 'family_image','memorial_user_id'
    ];
}
