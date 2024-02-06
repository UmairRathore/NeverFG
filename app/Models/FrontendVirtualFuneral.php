<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendVirtualFuneral extends Model
{
    use HasFactory;


    protected $table  = 'frontend_virtual_funerals';
    protected $fillable = [
        'frontend_virtual_funeral_title',
        'frontend_virtual_funeral_image',
        'frontend_virtual_funeral_description',
    ];
}
