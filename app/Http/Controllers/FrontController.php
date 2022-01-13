<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function itinerary()
    {
        return view('itinerary');
    }
}
