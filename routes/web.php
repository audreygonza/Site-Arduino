<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureAdmin;
use app\models\User;
use App\Models\Cities;
use App\Models\Railway;
use App\Http\Controllers\TripController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {

    return view('frontend/homepage');
})->name('homepage');





//DeviceController

Route::get('Admin/Devices/all', 'App\Http\Controllers\ArduinoController@AllDevices')->name('admin.Device.index');
Route::get('Admin/Digitals/all', 'App\Http\Controllers\ArduinoController@AllDigitals')->name('admin.Digital.index');



