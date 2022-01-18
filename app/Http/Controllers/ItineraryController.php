<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Itinerary;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $itineraries = Itinerary::with('country')->get();
        return view('admin.itinerary.index',compact('itineraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = Country::get();
        return view('admin.itinerary.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->hasFile('image_url')){
            $imagePath = Storage::put('/itinerary',$request->image_url);
        }

        Itinerary::create([
            'country_id' =>$request->country_id,
            'place_chinese_name' => $request->place_chinese_name,
            'place_english_name' => $request->place_english_name,
            'introduce' => $request->introduce,
            'information' => $request->information,
            'image_url' => $imagePath
        ]);

        return redirect()
                    ->route('itinerary.index')
                    ->with([
                        'message'=> '新增成功!',
                        'action'=> 'success'
                    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $countries = Country::get();
        $itinerary = Itinerary::find($id);
        return view('admin.itinerary.edit',compact('countries', 'itinerary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $itinerary = Itinerary::find($id);
        if($request->hasFile('image_url')){
            //刪除舊照片
            Storage::delete($itinerary->image_url);
            //加入新的
            $imagePath = Storage::put('/itinerary',$request->image_url);
        }
        else{
            //沿用舊的
            $imagePath = $itinerary->image_url;
        }

        $itinerary->update([
            'country_id' =>$request->country_id,
            'place_chinese_name' => $request->place_chinese_name,
            'place_english_name' => $request->place_english_name,
            'introduce' => $request->introduce,
            'information' => $request->information,
            'image_url' => $imagePath
        ]);

        return redirect()
                    ->route('itinerary.index')
                    ->with([
                        'message'=> '更新成功!',
                        'action'=> 'success'
                    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $itinerary = Itinerary::find($id);
        Storage::delete($itinerary->image_url);
        $itinerary->delete();
        return redirect()
                    ->route('itinerary.index')
                    ->with([
                        'message'=> '刪除成功!',
                        'action'=> 'success'
                    ]);


    }
}
