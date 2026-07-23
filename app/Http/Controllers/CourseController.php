<?php

namespace App\Http\Controllers;

use App\Models\area;
use App\Models\course;
use App\Models\training_center;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('Course.create', [
            'areas' => area::all(),
            'training_centers' => training_center::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_number' => 'required|integer',
            'day' => 'required|date',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course = course::create($validated);

        return redirect()->route('course.show', $course);
    }

    public function show(course $course)
    {
        return view('Course.show', compact('course'));
    }
}
