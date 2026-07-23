<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\area;

class AreaController extends Controller
{
    public function create()
    {
        return view('Area.create'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area = area::create($validated);

        return redirect()->route('area.show', $area);
    }

    public function show(area $area)
    {
        return view('Area.show', compact('area'));
    }
}
