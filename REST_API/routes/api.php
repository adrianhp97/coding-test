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

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| GET     /user_reviews           UserReviewsController@getUser
| POST    /user_reviews           UserReviewsController@store
| GET     /user_reviews/{id}      UserReviewsController@getUserById
| PUT     /user_reviews/{id}      UserReviewsController@update
| DELETE  /user_reviews/{id}      UserReviewsController@destroy
|
*/

Route::get('/user_reviews', 'UserReviewsController@getUser');
Route::post('/user_reviews', 'UserReviewsController@store');
Route::get('/user_reviews/{id}', 'UserReviewsController@getUserById');
Route::put('/user_reviews/{id}', 'UserReviewsController@update');
Route::delete('/user_reviews/{id}', 'UserReviewsController@destroy');