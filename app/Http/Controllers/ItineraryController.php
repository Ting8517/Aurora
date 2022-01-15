<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItineraryController extends Controller
{
    public function index()
    {
        $itineraries = Itinerary::get();
        return view('admin.itinerary.index',compact('itineraries'));
    }

    public function create()
    {
        return view('admin.itinerary.create');
    }

    public function store(Request $request)
    {
        $path = Storage::put('/',$request->image_url);

        Itinerary::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $path
        ]);

        return redirect()->route('itinerary.index');
        
    }

    public function edit($id)
    {
        $itinerary = Itinerary::find($id);

        return view('admin.itinerary.edit',compact('itinerary'));
    }

    public function update(Request $request, $id)
    {
        $itinerary = Itinerary::find($id);

        if($request->hasFile('image_url')){

            Storage::delete($itinerary->image_url);

            $path = Storage::put('/',$request->image_url);
        }else{
            $path = $itinerary->image_url;
        }
        $itinerary->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'image_url'=>$path
        ]);

        return redirect()->route('itinerary.index');
    }

    public function destroy($id)
    {
        $itinerary = Itinerary::find($id);
        Storage::delete($itinerary->image_url);
        $itinerary->delete();

        return redirect()->route('itinerary.index');
    }
}
