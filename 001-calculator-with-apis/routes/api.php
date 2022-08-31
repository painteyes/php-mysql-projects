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

Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function() {
    Route::post('addition/{number1}/{number2}', 'CalculatorController@addition');
    Route::post('subtraction/{number1}/{number2}', 'CalculatorController@subtraction');
    Route::post('division/{number1}/{number2}', 'CalculatorController@division');
    Route::post('multiplication/{number1}/{number2}', 'CalculatorController@multiplication');
});
