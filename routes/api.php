<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::apiResource('JobseakerProfile','JobseakerProfileController');
//Route::group(['prefix' => 'jobseakerProfile'], function() {
    Route::get('/jobseakerProfiles', 'JobseakerProfileController@index');
    Route::get('/jobseakerProfile/{id}', 'JobseakerProfileController@show');
    Route::post('/jobseakerProfile', 'JobseakerProfileController@store');
    Route::put('/jobseakerProfile/{id}', 'JobseakerProfileController@store');
    Route::delete('/jobseakerProfile/{id}', 'JobseakerProfileController@destroy');
//});

