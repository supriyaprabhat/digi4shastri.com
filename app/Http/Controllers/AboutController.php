<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $sections = Section::where('page_id', 2)
            ->get();
            
        return view('pages.about', compact(
            'sections',
        ));
    }
}
