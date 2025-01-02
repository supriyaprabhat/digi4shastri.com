<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $sections = Section::where('page_id', 1)
            ->get();

        $courses = Course::limit(6)->get();
            
        return view('pages.index', compact(
            'sections',
            'courses'
        ));
    }
}
