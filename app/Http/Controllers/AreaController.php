<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\area;

class AreaController extends Controller
{


    public function index(){

    $areas =area::all();

    return view('area.index',compact('areas'));

    }

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

        return redirect()->route('area.index', $area);
    }

    public function show(area $area)
    {
        return view('Area.show', compact('area'));
    }

        //editar

    public function edit(Area $area)
    {

        return view(
            'area.edit',
            compact('area')
        );
    }

    //actualizar

    public function update(Request $request, Area $area)
    {
        $area->update($request->all());

        return redirect()->route('area.index');
    }

//delete

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('area.index');
    }
}


