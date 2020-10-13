<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\GetConroller;
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
    return view('index');

});






//Route::view('index','hello');

//Route::get('index1','SalonController@submit');


//Route::view('page1','index');

Route::post('insertrecord',[SalonController::class,'insert']);

Route::get('dashboarda',[SalonController::class,'display']);

Route::get('delete/{id}',[SalonController::class,'delete']);

Route::get('edit/{id}',[SalonController::class,'edit']);

Route::post('update/{id}',[SalonController::class,'updaterecord']);

Route::view('about','aboutus');
//services
Route::view('services','service');

Route::view('hairservices','hairservices');

Route::view('pedicure','pedicure');

Route::view('makeup','makeup');

Route::view('Skin','Skin');

Route::view('spa','spa');
Route::view('wax','wax');

//gallary
Route::view('gallary','gallary');
Route::view('galtype','galtype');
Route::view('hairs','hairs');
Route::view('makeupgallery','makeupgallery');



Route::view('appointment','appointment');  // bookanappointment in header

Route::view('offers','creative');


//contactus

Route::view('contact','contactus');

Route::post('intouch',[GetConroller::class,'getintouch']);

Route::get('dashboardg',[GetConroller::class,'displayget']);

Route::get('eraseget/{rid}',[GetConroller::class,'erase']);

Route::get('editgetdata/{rid}',[GetConroller::class,'editget']);

Route::post('editinquiry/{rid}',[GetConroller::class,'updateget']);





//Route::view('dash','dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
