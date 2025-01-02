<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'heading',
        'primary_image',
        'contents',
        'status',
        'slug',
    ];
}
