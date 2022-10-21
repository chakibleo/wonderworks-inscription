<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Http\Controllers\Logincontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::get('/download', function ()  {

        $formData= DB::table('inscription')->get();
      return  (new FastExcel($formData))->download('inscription.xlsx');

});




Route::get('/', function () {
    return view('login');
});



Route::get('/form', [FormController::class,'form']
);
Route::post('/store', [FormController::class,'store']);

Route::get('/show', [FormController::class,'show']);

Route::post('/login',[Logincontroller::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);