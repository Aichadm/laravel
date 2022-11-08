<?php
// use App\Http\Controllers\PromotionController;

use App\Http\Controllers\PromotionController;
use GuzzleHttp\Promise\Create;


use Illuminate\Support\Facades\Route;

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
Route::controller(PromotionController::class)->group(function(){

    Route::get('/','index');
    Route::get('/create','create');
    Route::post('/promotion','store');
    Route::get('/edit/{id}','edit')->name('promotion.edit');
    Route::post('/update/{id}','update')->name('promotion.update');
    Route::get('/delete/{id}','destroy')->name('promotion.delete');
    
    
});
Route::get('/search',[PromotionController::class,'search']);

