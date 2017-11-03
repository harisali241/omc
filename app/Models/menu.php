<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable = [
        'menu_name', 'menu_slug','menu_route','active','hidden','sort_order'
    ];
}

