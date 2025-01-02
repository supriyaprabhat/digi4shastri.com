<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'code',
        'name',
        'short_description',
        'description',
        'price_inr',
        'course_total_user',
        'additional_user_inr',
        'thumbnail_image',
        'rating',
        'total_enrolled',
        'status',
        'faqs',
        'heading1',
        'p1',
        'duration',
        'cards',
        'curriculum_tab_1',
        'curriculum_tab_2',
        'tools_learn',
        'heading2',
        'heading3',
        'p2',
        'brochure',
        'key_skills',
        'assignments',
        'projects',
        'case_studies',
        'career_supports',
        'bonus_modules',
        'success_stories',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'faqs' => 'array',
        'curriculum_tab_1' => 'array',
        'curriculum_tab_2' => 'array',
        'cards' => 'array',
        'curriculum' => 'array',
        'tools_learn' => 'array',
        'key_skills' => 'array',
        'assignments' => 'array',
        'projects' => 'array',
        'case_studies' => 'array',
        'career_supports' => 'array',
        'bonus_modules' => 'array',
        'success_stories' => 'array',
    ];

    public static function getCourses() {
        return self::get();
    }
}
