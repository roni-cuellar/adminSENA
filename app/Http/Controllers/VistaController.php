<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ComputerController extends Controller
{
    public function create()
    {
        return view('Vista.create'); 
    }

}