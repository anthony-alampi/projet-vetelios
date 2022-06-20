<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RacineController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showLog()
    {
        return view('accueil');
    }
}
