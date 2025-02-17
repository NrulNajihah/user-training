<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\ProgramModel;
use App\Models\Course;

class UserController extends Controller
{

    // Display the date management page (index)
    public function index()
    {
        // Return the view
        return view('user');
    }

    public function store(Request $request) 
{
    // Validate the form data
    $validated = $request->validate([
        'email' => 'required|string|email|unique:user,email', // Ensure email is unique in the users table
        'fullname' => 'required|string|max:100',
        'department' => 'required|string|max:100',
        'contact_number' => 'required|string|max:15', // Adjust max length as needed
    ]);

    // Create the new user record
    $user = UserModel::create([
        'email' => $validated['email'],
        'fullname' => $validated['fullname'],
        'department' => $validated['department'],
        'contact_number' => $validated['contact_number']
    ]);

    // Return the user ID
    return response()->json(['user_id' => $user->user_id]);
}


}