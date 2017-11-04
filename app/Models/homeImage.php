<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homeImage extends Model
{
    protected $fillable = [
        'heading', 'textarea', 'image_name', 'active'
    ];
}
