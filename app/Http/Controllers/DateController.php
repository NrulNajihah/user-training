<?php

namespace App\Http\Controllers;

use App\Models\ProgramModel;
use App\Models\AvdateModel;
use Illuminate\Http\Request;

class DateController extends Controller
{
    // Display the date management page (index)
    public function list()
    {

        // Get all date records
        $dateList = AvdateModel::all();
        
        // Return the view with the Program data
        return view('date', compact('dateList'));
    }

     // Store a new date
     public function store(Request $request)
     {
         // Validate the form data
         $validated = $request->validate([
             'date' => 'required|string|unique:av_dates,date',
             'status' => 'required|string|max:100',
         ]);
 
         // Create the new date record
         AvdateModel::create([
             'date' => $validated['date'],
             'status' => $validated['status']
         ]);
 
         // Redirect to the date index page with success message
         return redirect()->route('date.list')->with('success', 'Date created successfully!');
     }
 
     public function update(Request $request, $dID)
     {
         // Retrieve the date record by dID (primary key)
         $date = AvdateModel::findOrFail($dID);
 
         // Validate the form data
         $validated = $request->validate([
            'date' => 'required|string|unique:av_dates,date,' . $dID . ',dID',
            'status' => 'required|string|max:100',
        ]);
 
         // Update the date record with the validated data
         $date->update([
             'date' => $validated['date'],
             'status' => $validated['status']
         ]);
 
         // Redirect with a success message
         return redirect()->route('date.list')->with('success', 'Date updated successfully!');
     }
 
     // Delete a date
     public function destroy($dID)
     {
         // Find the date by dID (primary key)
         $date = AvdateModel::findOrFail($dID);
         
         // Delete the date record
         $date->delete();
 
         // Redirect with a success message
         return redirect()->route('date.list')->with('success', 'Date deleted successfully!');
     }

}