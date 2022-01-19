<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class GeneralController extends Controller
{
    //

    public function home() {

        $comics = Comic::all();
        ddd($comics);
        
        return view('home', compact('comics'));
    }
}
