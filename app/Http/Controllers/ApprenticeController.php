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
        $apprentice = apprentice::create($request->all());

        return response()->json($apprentice);
    }

    public function show(apprentice $apprentice)
    {
        return view('apprentice.show', compact('apprentice'));
    }
}