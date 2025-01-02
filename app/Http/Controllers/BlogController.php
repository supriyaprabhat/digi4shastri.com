<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) {
        $blogs = Blog::where('status', 1)
            ->orderBy('id', 'desc')
            ->get();

        $mainBlog = $blogs->first();
        $otherBlogs = $blogs->slice(1);
        $courses = Course::limit(6)->get();
        return view('pages.blogs', compact(
            'blogs',
            'courses',
            'mainBlog',
            'otherBlogs',
        ));
    }


    public function blogDetails($slug, Request $request) {
        $blog = Blog::where('status', 1)
            ->where('slug', $slug)
            ->firstOrFail();
        $blogs = Blog::where('status', 1)
            ->where('slug', '!=', $slug)
            ->orderBy('id', 'desc')
            ->get();
            
        return view('pages.blogDetails', compact(
            'blog',
            'blogs'
        ));
    }
}
