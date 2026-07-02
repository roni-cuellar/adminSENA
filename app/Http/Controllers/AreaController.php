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
        $area = area::create($request->all());

        return response()->json($area);
    }

    public function show(area $area)
    {
        return view('area.show', compact('area'));
    }
}
