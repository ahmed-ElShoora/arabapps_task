<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\FormController;
use App\Http\Controllers\user\EndStepController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//group for get data from user in 3 pages
Route::group(['middleware'=>'auth'],function () {
    //Data  in page 1
    Route::get('/form_one',[FormController::class,'formOne']);
    Route::post('/form_one',[FormController::class,'formOneStore']);
    //Data  in page 2
    Route::get('/form_two',[FormController::class,'formTwo']);
    Route::post('/form_two',[FormController::class,'formTwoStore']);
    //Data  in page 3
    Route::get('/form_three',[FormController::class,'formThree']);
    Route::post('/form_three',[FormController::class,'formThreeStore']);
});

//submit form
Route::get('/sure_page',[EndStepController::class,'index']);
//end
Route::get('/end',[EndStepController::class,'end']);