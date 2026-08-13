<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use App\Models\computer;
use App\Models\course;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
//index
    
    public function index(){

    $apprentices =apprentice::all();

    return view('apprentice.index',compact('apprentices'));

    }

    //crear
    public function create()
    {
        return view('Apprentice.create', [
            'courses' => course::all(),
            'computers' => computer::all(),
        ]);
    }

    //store

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|string|max:10',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

        $apprentice = apprentice::create($validated);

        return redirect()->route('apprentice.show', $apprentice);
    }

    //mostrar info

    public function show(apprentice $apprentice)
    {
        return view('Apprentice.show', compact('apprentice'));
    }

    //editar

    public function edit(Apprentice $apprentice)
    {
        // Encuentro el aprendiz
        $courses = Course::all();
        $computers = Computer::all();

        return view(
            'apprentice.edit',
            compact('apprentice', 'courses', 'computers')
        );
    }

    //actualizar

    public function update(Request $request, Apprentice $apprentice)
    {
        $apprentice->update($request->all());

        return redirect()->route('apprentice.index');
    }

//delete

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();

        return redirect()->route('apprentice.index');
    }
}
