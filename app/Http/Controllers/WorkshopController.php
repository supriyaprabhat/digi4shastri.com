<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index(Request $request) {
        $courses = Course::where('status', 1)
            ->get();

        $sections = Section::where('page_id', 4)
            ->get();

        return view('pages.workshop', compact(
            'courses',
            'sections',
        ));
    }
}
