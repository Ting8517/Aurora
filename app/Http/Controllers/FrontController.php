<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Itinerary;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    //首頁
    public function index(){
        return view('index');
    }

    //極光熱點
    public function hotspotList(){
        //熱點的其他行程
        $itineraries = Itinerary::get();

        return view('front.hotspot.list',compact('itineraries'));
    }

    //其他行程內容頁
    public function itineraryContent($id){

        $itinerary = Itinerary::with('country')->find($id);
        //找除了自己且同一個國家的相關行程
        $otherItineraries = Itinerary::where('country_id',$itinerary->country_id)->where('id','<>',$itinerary->id)->get();

        return view('front.itinerary.content',compact('itinerary','otherItineraries'));
    }

    public function prepareList(){
        
        return view('front.prepare.list');
    }

    public function qaList(){

        return view('front.qa.list');
    }






    



    
    
//     public function itinerary()
//     {
//         return view('front.itinerary.itinerary');
//     }
}
