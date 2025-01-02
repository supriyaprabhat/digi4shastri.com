<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreeCounseling extends Model
{
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'choose_center',
    ];
}
