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
            'training_center' => training_center::all(),
        ]);
    }

    public function store(Request $request)
    {
        $teacher = teacher::create($request->all());

        return response()->json($teacher);
    }

    public function show(teacher $teacher)
    {
        return view('Teacher.show', compact('teacher'));
    }
}