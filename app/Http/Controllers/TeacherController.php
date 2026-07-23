<?php

namespace App\Http\Controllers;

use App\Models\area;
use App\Models\teacher;
use App\Models\training_center;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function create()
    {
        return view('Teacher.create', [
            'areas' => area::all(),
            'training_centers' => training_center::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $teacher = teacher::create($validated);

        return redirect()->route('teacher.show', $teacher);
    }

    public function show(teacher $teacher)
    {
        return view('Teacher.show', compact('teacher'));
    }
}
