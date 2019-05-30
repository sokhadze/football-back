<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ArticlesController;
use App\Articles;

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
// Guest
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::get('articles', 'ArticlesController@index'); 
Route::get('articles/{id}', 'ArticlesController@show');

// Auth User
Route::post('article/create', function (Request $request) {
    return Articles::create($request->all());
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'cors'], function(){
   //Route::get('articles', 'ArticlesController@index'); // <- your route here
//    Route::post('article/create', 'ArticleController@create');

});

//Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

////Route::get('articles', ['as' => 'articles', 'uses' => 'ArticlesController@index']);

