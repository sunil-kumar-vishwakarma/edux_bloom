<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $stat = Stat::first();
        return view('stats.index', compact('stat'));
    }

    public function edit($id)
    {
        $stat = Stat::findOrFail($id);
        return view('stats.edit', compact('stat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'students_helped' => 'required|integer',
            'programs_offered' => 'required|integer',
            'institutions' => 'required|integer',
            'countries' => 'required|integer',
        ]);

        $stat = Stat::findOrFail($id);
        $stat->update($request->all());

        return redirect()->route('stats.index')->with('success', 'Stats updated successfully!');
    }
}
