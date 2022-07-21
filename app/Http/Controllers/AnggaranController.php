<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detil;

class AnggaranController extends Controller
{
    public function show()
    {
        return view('main',[
            "anggarans" => detil::all()
        ]);
    }
}
