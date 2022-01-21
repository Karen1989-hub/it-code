<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminFrontPagesController;

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
    return view('welcome');
});
Route::get('/admin',[AdminFrontPagesController::class,'getAdminLoginPage']);

//Route::post('/checkAdmin')

Route::prefix('/admin')->group(function (){
    Route::get('/getTeacherEditForm',[AdminFrontPagesController::class,'getTeacherEditForm'])->name('getTeacherEditForm');
    Route::get('/getSliderEditForm',[AdminFrontPagesController::class,'getSliderEditForm'])->name('getSliderEditForm');
    Route::get('/getGeneralSection',[AdminFrontPagesController::class,'getGeneralSection'])->name('getGeneralSection');
    Route::get('/getCurses',[AdminFrontPagesController::class,'getCurses'])->name('getCurses');
    Route::get('/getEvents',[AdminFrontPagesController::class,'getEvents'])->name('getEvents');
    Route::get('/getStudentsOpinion',[AdminFrontPagesController::class,'getStudentsOpinion'])->name('getStudentsOpinion');

});
