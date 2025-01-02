<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = [
        'mobile_1',
        'mobile_2',
        'email_1',
        'email_2',
        'description',
        'short_description',
        'repeater_1',
        'repeater_2',
    ];

    protected $casts = [
        'repeater_1' => 'array',
        'repeater_2' => 'array',
    ];
}
