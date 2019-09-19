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

Route::prefix('auth')->group(function(){
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::group(['middleware' => 'auth:api'], function (){
        Route::get('getUser', 'AuthController@getUser');
        Route::post('dislikecandidate', 'DislikeCandidateController@addDislike');
        Route::post('likecandidate', 'CandidateLikeController@addLike');
        Route::get('candidate/{numberload}', 'CandidateController@getTotalNumberCandidate');
        Route::get('detailcandidate/{id}', 'CandidateController@detailShowCandidate');
        Route::get('company/{numberload}', 'CompanyController@getTotalNumberCompany');
        Route::get('detailcompany/{id}', 'CompanyController@detailCompany');
        Route::post('dislikecompany', 'DislikeCompanyController@addDislike');
        Route::post('likecompany', 'CompanyLikeController@addLike');
    });
});
