<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Display the course management page (index)
    public function index()
    {
        // Get all course records
        $courseList = Course::all();
        
        // Return the view with the course data
        return view('course', compact('courseList'));
    }

    // Store a new course
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'course_id' => 'required|string|unique:courses,course_id', // Ensure unique course_id
            'course_name' => 'required|string|max:100',
        ]);

        // Create the new course record
        Course::create([
            'course_id' => $validated['course_id'],
            'course_name' => $validated['course_name']
        ]);

        // Redirect to the course index page with success message
        return redirect()->route('course.index')->with('success', 'course created successfully!');
    }

    public function update(Request $request, $cID)
    {
        // Retrieve the course record by cID (primary key)
        $course = Course::findOrFail($cID);

        // Validate the form data
        $validated = $request->validate([
            // Ensure that course_id is unique, but exclude the current course record by cID
            'course_id' => 'required|string|unique:courses,course_id,' . $cID . ',cID', 
            'course_name' => 'required|string|max:100',
        ]);

        // Update the course record with the validated data
        $course->update([
            'course_id' => $validated['course_id'],
            'course_name' => $validated['course_name']
        ]);

        // Redirect with a success message
        return redirect()->route('course.index')->with('success', 'Courses updated successfully!');
    }

    // Delete a course
    public function destroy($cID)
    {
        // Find the course member by cID (primary key)
        $course = Course::findOrFail($cID);
        
        // Delete the course record
        $course->delete();

        // Redirect with a success message
        return redirect()->route('course.index')->with('success', 'Course deleted successfully!');
    }

}