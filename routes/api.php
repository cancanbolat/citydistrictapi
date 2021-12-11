<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityDistrictController;

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

//City
Route::get('cities', [CityDistrictController::class, 'getAllCity']);
Route::get('city/{id}', [CityDistrictController::class, 'getByIdCity']);

//District
Route::get('districts', [CityDistrictController::class, 'getAllDistrict']);
Route::get('district/{id}', [CityDistrictController::class, 'getByIdDistrict']);

Route::get('citydistricts/{cityId}', [CityDistrictController::class, 'getByCityDistrict']);

