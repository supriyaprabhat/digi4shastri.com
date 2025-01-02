<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve sections as before
        $sections = Section::where('page_id', 5)->get();

        // Start building the query for courses
        $coursesQuery = Course::where('status', 1);

        // Apply price range filter
        if ($request->has('price')) {
            [$minPrice, $maxPrice] = explode('-', $request->input('price'));
            $coursesQuery->whereBetween('price_inr', [(float)$minPrice, (float)$maxPrice]);
        }

        // Apply total users filter
        if ($request->has('total_users')) {
            $coursesQuery->where('course_total_user', '>=', (int)$request->input('total_users'));
        }

        // Execute the query to get the courses
        $courses = $coursesQuery->get();

        // Return the view with filtered results
        return view('pages.studentCorner', compact('sections', 'courses'));
    }

}
