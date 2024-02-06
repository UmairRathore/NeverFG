<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendFeature extends Model
{
    use HasFactory;
protected $table  = 'frontend_features';
    protected $fillable = [
        'frontend_feature_title',
        'frontend_feature_image',
        'frontend_feature_description',
    ];
}
