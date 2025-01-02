<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(Request $request) {

        $sections = Section::where('page_id', 7)
            ->get();
        return view('pages.contactUs', compact(
            'sections'
        ));
    }
}
