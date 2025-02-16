<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalBlogController extends Controller
{
    public function personalBlog()
{
    //return view('personal_blog'); // Ensure 'personal_blog.blade.php' exists in the views folder


  // Redirect to the actual course-fetching route
    return redirect()->route('personal_blog');
    
}


}
