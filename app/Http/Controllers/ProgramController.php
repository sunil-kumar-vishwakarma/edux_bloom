<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{

    public function index(Request $request)
    {
        // Get sorting params
        $sortField = $request->get('sort_field', 'university_name');
        $sortOrder = $request->get('sort_order', 'asc');

        // Paginate programs with sorting
        $programs = Program::orderBy($sortField, $sortOrder)->paginate(10);


        $programs = Program::all();
        return view('discover_program.index', compact('programs'));
    }

    public function search(Request $request)
    {
        $programs = Program::all();
        $programs = Program::paginate(10); // Adjust per-page count as needed


        return view('search', compact('programs'));
    }


    // Show the form for creating a new program
    public function create()
    {
        return view('discover_program.create');
    }

    // Store a newly created program
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'university_name' => 'required|string|max:255',
            'certificate' => 'required|string|max:255',
            'college_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'campus_city' => 'required|string|max:255',
            'tuition' => 'required|numeric',
            'application_fee' => 'required|numeric',
            'duration' => 'required|string',
            'success_prediction' => 'required|string',
            'details' => 'required|string',
            // 'status' => 'required|string|in:Active,Inactive',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('program_images', 'public');
        }

        // Create the program
        $program = new Program();
        $program->university_name = $validated['university_name'];
        $program->certificate = $validated['certificate'];
        $program->college_name = $validated['college_name'];
        $program->location = $validated['location'];
        $program->campus_city = $validated['campus_city'];
        $program->tuition = $validated['tuition'];
        $program->application_fee = $validated['application_fee'];
        $program->duration = $validated['duration'];
        $program->success_prediction = $validated['success_prediction'];
        $program->details = $validated['details'];
        // $program->status = $validated['status'];

        // Store the image path
        if ($imagePath) {
            $program->image = $imagePath;
        }

        $program->save();

        return redirect()->route('discover_program.index')->with('success', 'Program created successfully.');
    }

    // Show a single program as JSON
    public function show($id)
    {
        $program = Program::findOrFail($id);
        return response()->json($program);
    }

    // Show the form for editing a program
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('discover_program.edit', compact('program'));
    }

    // Update a specific program
    public function update(Request $request, $id)
    {
        $program = Program::findOrFail($id);

        try {
            // Update all fields except image
            $program->update($request->except('image'));

            // Handle image update
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($program->image && Storage::disk('public')->exists($program->image)) {
                    Storage::disk('public')->delete($program->image);
                }

                // Store new image
                $imagePath = $request->file('image')->store('program_images', 'public');
                $program->image = $imagePath;
                $program->save();
            }

            return redirect()->route('discover_program.index')->with('success', 'Program updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('discover_program.index')->with('error', 'Failed to update program. Please try again.');
        }
    }



    // Delete a program
    public function destroy($id)
    {
        $program = Program::findOrFail($id);

        // Delete the image if it exists
        if ($program->image) {
            Storage::disk('public')->delete($program->image);
        }

        $program->delete();

        return redirect()->route('discover_program.index')->with('success', 'Program deleted successfully!');
    }

    // Toggle status
    // public function toggleStatus($id)
    // {
    //     $program = Program::findOrFail($id);
    //     $program->status = ($program->status === 'Active') ? 'Inactive' : 'Active';
    //     $program->save();

    //     return response()->json(['status' => $program->status]);
    // }
}
