<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CliniqueController extends Controller
{
    public function clinique()
    {
        return view('clinique');
    }
}
