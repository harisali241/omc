<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homeText extends Model
{
    protected $fillable = [
        'heading1', 'text1', 'color1', 'heading2', 'text2', 'color2', 'heading3', 'text3', 'color3'
    ];
}
