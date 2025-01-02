<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($courseId, Request $request) {
        $course = Course::findOrFail($courseId);
        return view('pages.course', compact(
            'course'
        ));
    }
}
