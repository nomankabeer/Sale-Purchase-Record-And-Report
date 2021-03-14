<?php
date_default_timezone_set("Asia/Karachi");

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BikeController;
use \App\Http\Controllers\UserListController;
use \App\Http\Controllers\DashboardController;
//use \Illuminate\Support\Facades\Artisan;




Route::get('/', function () {
    dd('dd');
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    return view('welcome');
});

//Route::get('' , )

Route::get('/' , [DashboardController::class , "index"])->name('dashboard.index');

Route::get('/bike' , [BikeController::class , "index"])->name('bike.index');
Route::get('/bike/create' , [BikeController::class , "create"])->name('bike.create');
Route::post('/bike/store' , [BikeController::class , "store"])->name('bike.store');
Route::get('/bike/detail/{id}' , [BikeController::class , "detail"])->name('bike.detail');


Route::get('/user_list' , [UserListController::class , "index"])->name('user_list.index');
Route::get('/user_list/create' , [UserListController::class , "create"])->name('user_list.create');
Route::Post('/user_list/store' , [UserListController::class , "store"])->name('user_list.store');
Route::get('/user_list/detail/{id}' , [UserListController::class , 'detail'])->name('user_list.detail');
Route::Post('/user_list/edit/{id}' , [UserListController::class , "store"])->name('user_list.edit');


Route::get('/user_list/data' , [UserListController::class , "data"])->name('user_list.data');
Route::get('/bike/data/{purchase_from?}' , [BikeController::class , "data"])->name('bike.data');

Route::get('/bike/UserListModuleBikedata/{purchase_from?}' , [BikeController::class , "UserListModuleBikedata"])->name('bike.UserListModuleBikedata');



Route::get('/cache', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    return 'FINISHED';
});