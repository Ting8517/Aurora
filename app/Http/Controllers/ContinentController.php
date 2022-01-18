<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $continents = Continent::get();
        return view('admin.continent.index',compact('continents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.continent.create');
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
        Continent::create([
            'name' => $request->name
        ]);
        return redirect()
                    ->route('continent.index')
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
        $continent = Continent::find($id);
        return view('admin.continent.edit',compact('continent'));

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
        $continent = Continent::find($id);
        $continent->update([
            'name' => $request->name
        ]);

        return redirect()
                    ->route('continent.index')
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
        $continent = Continent::with('countries')->find($id);
        if($continent->countries->count()){
            return redirect()
                        ->route('continent.index')
                        ->with([
                            'message'=> $continent->name.'尚有'.$continent->countries->count().'個國家資料，無法刪除!',
                            'action'=> 'error'
                        ]);
        }

        $continent->delete();
        return redirect()
                    ->route('continent.index')
                    ->with([
                        'message'=> '刪除成功!',
                        'action'=> 'success'
                    ]);
    }
}
