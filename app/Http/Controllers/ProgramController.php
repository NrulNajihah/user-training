<?php

namespace App\Http\Controllers;

use App\Models\ProgramModel;
use App\Models\Course;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    // Display the Program management page (index)
    public function list()
    {
        $progList = ProgramModel::with('course')->get();

        // Get all course records
        $courseList = Course::all();
        
        // Return the view with the Program data
        return view('program', compact('progList','courseList'));
    }

    // Store a new program
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'cID' => 'required|exists:courses,cID', // Ensure cID exists
            'program_id' => 'required|string|unique:programs,program_id', // Ensure unique program_id
            'program_name' => 'required|string|max:100',
            'duration' => 'required|string|max:100',
            'fee' => 'required|string|max:100',
            'time' => 'required|string|max:100',
            'practical_mode' => 'required|string|max:100',
            'location' => 'required|string|max:100',
        ]);

        // Create the new program record
        ProgramModel::create([
            'cID' => $validated['cID'], // Foreign key
            'program_id' => $validated['program_id'],
            'program_name' => $validated['program_name'],
            'duration' => $validated['duration'],
            'fee' => $validated['fee'],
            'time' => $validated['time'],
            'practical_mode' => $validated['practical_mode'],
            'location' => $validated['location']
        ]);

        // Redirect to the program index page with success message
        return redirect()->route('program.list')->with('success', 'program created successfully!');
    }

    public function update(Request $request, $pID)
{
    // Retrieve the program record by pID (primary key)
    $program = ProgramModel::findOrFail($pID);

    // Validate the form data
    $validated = $request->validate([
        'cID' => 'required|exists:courses,cID', // Ensure cID exists
        'program_id' => 'required|string|unique:programs,program_id,' . $pID . ',pID', // Ensure unique program_id
        'program_name' => 'required|string|max:100',
        'duration' => 'required|string|max:100',
        'fee' => 'required|string|max:100',
        'time' => 'required|string|max:100',
        'practical_mode' => 'required|string|max:100',
        'location' => 'required|string|max:100',
    ]);

    // Update the program record with the validated data
    $program->update([
        'cID' => $validated['cID'], // Foreign key
        'program_id' => $validated['program_id'],
        'program_name' => $validated['program_name'],
        'duration' => $validated['duration'],
        'fee' => $validated['fee'],
        'time' => $validated['time'],
        'practical_mode' => $validated['practical_mode'],
        'location' => $validated['location']
    ]);

    // Redirect with a success message
    return redirect()->route('program.list')->with('success', 'Program updated successfully!');
}


    // Delete a program
    public function destroy($pID)
    {
        // Find the program by pID (primary key)
        $program = ProgramModel::findOrFail($pID);
        
        // Delete the program record
        $program->delete();

        // Redirect with a success message
        return redirect()->route('program.list')->with('success', 'Programs deleted successfully!');
    }

}