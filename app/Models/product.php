<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'product_name', 'product_detail','product_image','product_category','active','home_status'
    ];
}
