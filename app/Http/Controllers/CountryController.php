<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Continent;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $countries = Country::with('continent')->get();
    
        return view('admin.country.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $continents = Continent::get();
        return view('admin.country.create',compact('continents'));
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
        Country::create([
            'chinese_name' => $request->chinese_name,
            'english_name' => $request->english_name,
            'continent_id' => $request->continent_id
        ]);

        return redirect()
                    ->route('country.index')
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
        $continents = Continent::get();
        $country = Country::find($id);
        return view('admin.country.edit',compact('continents', 'country'));

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
        $country = Country::find($id);

        $country->update([
            'chinese_name' => $request->chinese_name,
            'english_name' => $request->english_name,
            'continent_id' => $request->continent_id
        ]);

        return redirect()
                    ->route('country.index')
                    ->with([
                        'message'=> '編輯成功!',
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
        $country = Country::with('itineraries')->find($id);
        if($country->itineraries->count()){
            return redirect()
                        ->route('country.index')
                        ->with([
                            'message'=> $country->chinese_name.'尚有'.$country->itineraries->count().'個景點資訊，無法刪除!',
                            'action'=> 'error'
                        ]);
        }
    
        $country->delete();
        return redirect()
                    ->route('country.index')
                    ->with([
                        'message'=> '刪除成功!',
                        'action'=> 'success'
                    ]);
    }
}
