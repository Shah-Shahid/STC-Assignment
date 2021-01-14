<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\UserController;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::get('/users', 'App\Http\Controllers\API\UserController@index');
Route::get('/users/fmt', 'App\Http\Controllers\API\UserController@getFormatedData');
Route::get('/users/{id}', 'App\Http\Controllers\API\UserController@show');
Route::post('/users', 'App\Http\Controllers\API\UserController@store');
Route::put('/users/{id}', 'App\Http\Controllers\API\UserController@update');
Route::delete('/users/{id}', 'App\Http\Controllers\API\UserController@destroy');
