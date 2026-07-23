<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use App\Models\computer;
use App\Models\course;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function create()
    {
        return view('Apprentice.create', [
            'courses' => course::all(),
            'computers' => computer::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|integer',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

        $apprentice = apprentice::create($validated);

        return redirect()->route('apprentice.show', $apprentice);
    }

    public function show(apprentice $apprentice)
    {
        return view('Apprentice.show', compact('apprentice'));
    }
}
