<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryPhoto extends Model
{
    use HasFactory;

    protected $table = "library_photos";

    protected $fillable =
        [
            'icon',
            'profile',
            'theme',
        ];
}
