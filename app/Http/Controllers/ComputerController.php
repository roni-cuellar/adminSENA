<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\computer;

class ComputerController extends Controller
{
    public function create()
    {
        return view('Computer.create'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|integer',
            'brand' => 'required|string|max:255',
        ]);

        $computer = computer::create($validated);

        return redirect()->route('computer.show', $computer);
    }

    public function show(computer $computer)
    {
        return view('Computer.show', compact('computer'));
    }
}
