<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all courses, ordered by latest
        $courses = Course::latest()->get();

        // Pass the courses to the home view
        return view('home', compact('courses'));

         
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog_details');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'field' => 'required|string|max:255',
            'duration' => 'required|integer',
        ]);

        // Ensure user is authenticated before assigning user_id
        if (!Auth::check()) {
            return redirect()->route('dashboard')->with('error', 'You must be logged in to add a course.');
        }

        // Create a new course record
        Course::create([
            'name' => $request->name,
            'field' => $request->field,
            'duration' => $request->duration,
            'user_id' => Auth::id(), // Ensure only authenticated users can add courses
        ]);

        return redirect()->route('courses.create')->with('success', 'Course added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('editcourse', compact('course'));
    }

    // Handle form submission and update course
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|numeric|min:1',
            'field' => 'required|string|max:255',
        ]);

        $course = Course::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $course->update([
            'name' => $request->name,
            'duration' => $request->duration,
            'field' => $request->field,
        ]);

        return redirect()->back()->with('success', 'Course updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */


     
    public function destroy(string $id)
    {
        // Ensure the course exists and belongs to the authenticated user
        $course = Course::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $course->delete();

        return redirect()->back()->with('success', 'Course deleted successfully.');
    }

    public function personalBlog()
{
    // Fetch only the courses created by the logged-in user
    $userCourses = Course::where('user_id', Auth::id())->latest()->get();

    // Pass data to the personal blog view
    return view('personal_blog', compact('userCourses'));
}
}
