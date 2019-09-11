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

Route::middleware('auth:api')->get('/user', function (Request $request) { 
    return $request->user(); 
});

Route::get('company/{numberload}', 'CompanyController@getTotalNumberCompany');
Route::get('detailcompany/{id}', 'CompanyController@detailCompany');

Route::get('candidate/{numberload}', 'CandidateController@showCandidate');
Route::get('detailcandidate/{id}', 'CandidateController@detailCandidate');

Route::prefix('auth')->group(function(){
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('getUser', 'AuthController@getUser');
    });
});


