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
        return view('Courses.create', [
            'areas' => area::all(),
            'training_center' => training_center::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'nullable|exists:areas,id',
            'training_center_id' => 'nullable|exists:training_centers,id',
        ]);

        $course = course::create($validated);

        return redirect()->route('course.show', $course);
    }

    public function show(course $course)
    {
        return view('course.show', compact('course'));
    }
}