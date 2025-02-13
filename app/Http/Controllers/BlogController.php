<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Show Blog Details Page
    public function show()
    {
        return view('blog_details'); // Redirects to the blog details view
    }
}