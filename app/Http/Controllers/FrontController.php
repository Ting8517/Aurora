<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Itinerary;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index.index');
    }

    public function itinerary()
    {
        $itineraries = Itinerary::get();

        return view('front.itinerary.itinerary',compact('itineraries'));
    }

    public function contact(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        return 'success';
    }

    public function QA()
    {
        return view('front.q&a.q&a');
    }
}
