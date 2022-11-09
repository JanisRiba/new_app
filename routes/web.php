<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ActorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
$route = Route::current(); // Illuminate\Routing\Route
$name = Route::currentRouteName(); // string
$action = Route::currentRouteAction(); // string


Route::get('/', function () {
    return view('welcome');
});

Route::get('/actor', [ActorController::class, 'index']);

Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{countryId}', 'CityController@getCityCountryById');



