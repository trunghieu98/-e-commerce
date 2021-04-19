<?php

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

// Route::get('index', function () {
//     return view('index');
// });
// Route::get('/', function () {
//     return view('index');
// });
Route::get('index', ['as' => 'trangchu', 'uses' => 'trangchuController@getindex']);
Route::get('/', 'trangchuController@getindex');
Route::get ('sanpham',['as'=>'product','uses'=> 'trangchuController@getproduct']);
Route::get('danhmuc',['as'=>'category','uses'=>'trangchuController@getcategory']);
Route::get('thanhtoan',['as'=>'checkout','uses'=>'trangchuController@getcheckout']);
// Route::get('/', function() {
//     return response()->json([
//      'stuff' => phpinfo()
//     ]);
//  });
