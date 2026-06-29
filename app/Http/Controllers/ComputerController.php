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
        $computer = computer::create($request->all());

        return response()->json($computer);
    }

    public function show(computer $computer)
    {
        return view('computer.show', compact('computer'));
    }
}