<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class GeneralController extends Controller
{
    //

    public function home() {
  
        return view('home');
    }
}
