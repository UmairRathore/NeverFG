<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memento extends Model
{
    use HasFactory;
    protected $table = 'mementos';
    protected $fillable = [
        'memento_image','memento_video'
    ];
}
