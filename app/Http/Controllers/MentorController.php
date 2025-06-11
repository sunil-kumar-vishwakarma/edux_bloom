<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
   public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:mentors',
        'phone' => 'required|string',
        'school' => 'required|string',
        'country' => 'required|string',
    ]);

    \App\Models\Mentor::create($validated);

    return response()->json(['message' => 'Application submitted successfully !']);
}


  public function index()
{
    $mentors = \App\Models\Mentor::latest()->get();
    return view('admin.mentors', compact('mentors'));
}

public function destroy($id)
{
    $mentor = Mentor::findOrFail($id);
    $mentor->delete();

    return redirect()->back()->with('success', 'Mentor application deleted successfully.');
}


}
