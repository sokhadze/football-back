<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ArticlesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//header('Access-Control-Allow-Origin:  *');
//header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
//header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization, Language, Application/json');

//header('Access-Control-Allow-Origin:  *');
//header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
//header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization, Language');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//Route::group(['middleware' => 'cors'], function(){
//    Route::get('articles', 'ArticlesController@index'); // <- your route here
//});
Route::get('articles', 'ArticlesController@index'); // <- your route here

//Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

//Route::post('register', 'Auth\RegisterController@register');
//Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
////Route::get('articles', ['as' => 'articles', 'uses' => 'ArticlesController@index']);
//Route::get('articles/{id}', 'ArticlesController@show');

//Route::group(['middleware' => 'auth:api'], function() {
//    Route::post('logout', 'Auth\LoginController@logout');
//
//});
