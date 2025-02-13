<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
   

    public function store(Request $request)
    {
       

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'field' => 'required|string|max:255',
            'duration' => 'required|integer',
        ]);

        // Ensure user is authenticated before assigning user_id
        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('error', 'You must be logged in to add a course.');
        }

        // Create a new course record
        Course::create([
            'name' => $request->input('name'),
            'field' => $request->input('field'),
            'duration' => $request->input('duration'),
            'user_id' => $user->id, // Ensures only authenticated users can add courses
        ]);

        return redirect()->back()->with('success', 'Course added successfully!');
    }

    public function index()
    {
        // Fetch all courses from the database
        $courses = Course::all();

        // Debugging: Check if courses are being retrieved
        dd($courses);

        // Pass the courses to the home view
        return view('home', compact('courses'));
    }
}