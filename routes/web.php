<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\NoticeController;


Route::post('/register',[RegisterController::class,'register']);
Route::post('/setting/store',[SettingController::class,'store']);
Route::post('/notice/store',[NoticeController::class,'store']);

Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');