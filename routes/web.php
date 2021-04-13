<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\ReviewModel;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', 'MainController@get_home_page');

Route::get('/review', 'MainController@reviews')->name('review');
Route::get('/review/check', 'MainController@review_check');
//Get post
Route::get('reviews/{id}',function ($id){
    $objects = new ReviewModel;
    $object = $objects::where('id','=',$id)->first();
    return view('post' ,['object'=>$object]);
});
//Route::get('/user{id}/{name}', function ($id ,$name) {
  //  return view('about');
//});
