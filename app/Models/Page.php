<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'order',
        'status',
        'icon',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
