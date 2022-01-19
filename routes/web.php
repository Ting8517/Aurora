<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContinentController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ItineraryController;
use App\Models\Country;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//前台
Route::get('/',[FrontController::class,'index'])->name('index');
//極光熱點
Route::get('/hotspot',[FrontController::class,'hotspotList'])->name('hotspots.list');
//相關行程
Route::get('/itinerary/{id}', [FrontController::class,'itineraryContent'])->name('itineraries.content');
//行前準備
Route::get('/prepare',[FrontController::class,'prepareList'])->name('prepare.list');
//常見問題
Route::get('/qa',[FrontController::class,'qaList'])->name('qa.list');
//聯絡我們，使用者用
Route::post('/',[ContactController::class,'store'])->name('contact.store');


Auth::routes();

//後台登入首頁
Route::get('/home', [HomeController::class, 'index'])->name('home');

//後台                      判斷有沒有登入
Route::prefix('admin')->middleware(['auth'])->group(function(){
    
    Route::resources([
        //洲管理
        'continent' =>ContinentController::class,
        //國家管理
        'country' => CountryController::class,
        //相關行程管理
        'itinerary' => ItineraryController::class,
    ]);

    //聯絡我們
    Route::prefix('/contact')->group(function(){
        Route::get('/',[ContactController::class,'index'])->name('contact.index');
        Route::patch('/{id}',[ContactController::class,'update'])->name('contact.update');
        Route::delete('/{id}',[ContactController::class,'destroy'])->name('contact.destroy');   
    });

});

// Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');



