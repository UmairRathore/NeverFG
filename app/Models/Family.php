<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'relation', 'family_image', 'memorial_user_id', 'parent_id'
    ];

    public function children()
    {
        return $this->hasMany(Family::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Family::class, 'parent_id');
    }
}
