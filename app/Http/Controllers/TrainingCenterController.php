<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\training_center;

class TrainingCenterController extends Controller
{
    public function create()
    {
        return view('Training_Center.create'); 
    }

    public function store(Request $request)
    {
        $training_center = training_center::create($request->all());

        return response()->json($training_center);
    }

    public function show(training_center $training_center)
    {
        return view('Training_Center.show', compact('training_center'));
    }
}