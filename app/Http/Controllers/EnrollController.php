<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Course;
use App\Models\ProgramModel;
use App\Models\AvdateModel;
use App\Models\EnrollModel;

class EnrollController extends Controller
{

    public function list()
{
    $enrollList = EnrollModel::with('program', 'date')->get();
    $programs = ProgramModel::all();
    $dates = AvdateModel::all();

    // Ensure data is passed to the view
    return view('enrollment', compact('enrollList', 'programs', 'dates'));
}

    
    // Display the Enroll management page (index)
    public function index()
{
    // Fetch all necessary data
    $courses = Course::all();
    $programs = ProgramModel::all();
    $dates = AvdateModel::all();

    // Pass the data to the view
    return view('index', compact('courses', 'programs', 'dates'));
}

    // Step 1: Fetch user_id based on email
    public function getUserId(Request $request)
{
    \Log::info('Fetching user ID for email: ' . $request->email);

    $request->validate(['email' => 'required|email']);

    $user = UserModel::where('email', $request->email)->first();

    if ($user) {
        \Log::info('User found: ' . $user->user_id);
        return response()->json(['user_id' => $user->user_id]);
    }

    \Log::warning('No user found for email: ' . $request->email);
    return response()->json(['error' => 'User not found'], 404);
}



    // Step 2: Fetch programs based on selected course
    public function getPrograms(Request $request)
    {
        $programs = ProgramModel::where('cID', $request->cID)->get();
        return response()->json(['programs' => $programs]);
    }

    // Step 3: Fetch active dates based on selected program
    public function getDates(Request $request)
    {
        $dates = AvdateModel::where('pID', $request->pID)->where('active', true)->get();
        return response()->json(['dates' => $dates]);
    }

    // Step 4: Store enrollment details
    public function store(Request $request)
{
    // Validate request
    $request->validate([
        'user_id' => 'required|exists:users,user_id',
        'pID' => 'required|exists:programs,pID',
        'dID' => 'required|exists:av_dates,dID',
        'receipt' => 'required|file|mimes:jpg,png,pdf|max:2048',
    ]);

    // Store receipt in the public storage and get the original file name
    $receiptFile = $request->file('receipt');
    $receiptPath = $receiptFile->store('receipts', 'public');
    $originalFileName = $receiptFile->getClientOriginalName();

    // Save data into the EnrollModel
    EnrollModel::create([
        'user_id' => $request->user_id,
        'pID' => $request->pID,
        'dID' => $request->dID,
        'receipt' => $receiptPath,          // Path to the uploaded file
        'receiptFilename' => $originalFileName, // Original file name
    ]);

    // Return success response
    return response()->json(['message' => 'Enrollment completed successfully!']);
}


}