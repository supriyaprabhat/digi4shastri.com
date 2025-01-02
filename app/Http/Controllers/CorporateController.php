<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function index(Request $request) {
        $sections = Section::where('page_id', 3)
            ->get();

        return view('pages.corporate', compact(
            'sections',
        ));
    }
}
