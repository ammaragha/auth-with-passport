<?php

use Illuminate\Http\Request;

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
// Route::get('/test',function (Request $request)
// {
//     return 'nicew';
// });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware'=>['auth:api',],'prefix'=>'v1'],function ()
{
    Route::get('/user',function (Request $request)
    {
        return $request->user();
    });

    // Route::get('/authers','AuthersController@index');
    // Route::get('/authers/{auther}','AuthersController@show');

    Route::apiResource('/authers','AuthersController');
});

Route::group(['middleware'=>'api','prefix'=>'v1','namespace'=>'Api'],function ()
{
    Route::post('/singup','sign@sign');
}); 

