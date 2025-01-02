<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerCounselling extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'selected_time',
        'city',
        'message',
    ];
}
