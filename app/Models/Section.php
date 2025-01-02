<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'page_id',
        'section_name',
        'order',
        'status',
        'image',
        'image1',
        'image2',
        'heading',
        'sub_heading1',
        'sub_heading2',
        'sub_heading3',
        'sub_heading4',
        'sub_heading5',
        'other1',
        'other2',
        'other3',
        'other4',
        'other5',
        'button_link',
        'button_name',
        'image3',
        'image4',
        'image5',
        'image6',
        'button_link1',
        'button_name1',
        'button_name2',
        'button_link2',
        'button_name3',
        'button_link3',
        'button_name4',
        'button_link4',
        'button_name5',
        'button_link5',
    ];

    protected $casts = [
        'other1' => 'array',
        'other2' => 'array',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
