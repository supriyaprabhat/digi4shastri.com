<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = [
        'name',
        'students_trained',
        'students_placed',
        'expert_mentors',
        'years_in_industry',
        'cta_link_1',
        'cta_name_1',
        'heading',
        'sub_heading1',
        'paragraph1',
        'cta_link_2',
        'cta_name_2',
        'cta_link_3',
        'cta_name_3',
        'sub_heading2',
        'sub_heading3',
        'paragraph2',
        'image1',
        'cta_link_4',
        'cta_name_4',
        'sub_heading4',
        'paragraph3',
        'sub_heading5',
        'paragraph4',
        'repeater1',
        'repeater2',
        'cta_link_5',
        'cta_name_5',
        'cta_link_6',
        'cta_name_6',
        'faq',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'repeater1' => 'array',
        'repeater2' => 'array',
        'faq' => 'array',
    ];


    public static function getCenters() {
        return self::get();
    }
}
