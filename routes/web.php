<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

Route::get('/dash', function () {
    return view('dash');
});

//load index page
Route::get('/', function () {
    return view('index');
});

//load login
Route::get('/login', function () {
    return view('login');
});

//load register page
Route::get('/register', function () {
    return view('register');
});

//load user profile
Route::get('/profile', function () {
    return view('/profile');
});

Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('main', [loginController::class,'index']);
Route::post('main/checklogin', [loginController::class,'checklogin']);
Route::get('main/successlogin', [loginController::class,'successlogin']);
Route::get('main/logout', [loginController::class,'logout']);