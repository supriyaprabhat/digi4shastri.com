<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;

class CentreController extends Controller
{
    public function index($centerId, Request $request) {
        
        $center = Center::findOrFail($centerId);
        
        return view('pages.centre', compact(
            'center'
        ));
    }
}
