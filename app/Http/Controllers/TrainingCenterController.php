<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\training_center;

class TrainingCenterController extends Controller
{
    public function create()
    {
        return view('Training_center.create'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $training_center = training_center::create($validated);

        return redirect()->route('training_center.show', $training_center);
    }

    public function show(training_center $training_center)
    {
        return view('Training_center.show', compact('training_center'));
    }
}
