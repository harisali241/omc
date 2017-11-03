<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carousel extends Model
{
    protected $fillable = [
        'carousel_label', 'carousel_text', 'carousel_image', 'active', 'sort_order'
    ];
}
