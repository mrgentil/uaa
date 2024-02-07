<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpliquerController extends Controller
{
    public function index()
    {
        return view('impliquer.index');
    }
}
