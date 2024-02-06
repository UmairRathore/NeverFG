<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendIndex extends Model
{
    use HasFactory;

    protected $fillable = [
        'index_image_heading',
        'index_image',
        'index_card_image_heading',
        'index_card_image',
        'index_card_image_description',
    ];

    protected $table = 'frontend_index';
}
