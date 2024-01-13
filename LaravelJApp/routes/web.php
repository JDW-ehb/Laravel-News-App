<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\UserController;


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
    return view('pages.welcome');
})->name('home');

// Route::get('/login', function () {
Route::get('/login', [AuthManager::class, 'login'])->name('login.get');
// Route::post('/login', function () {
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

// Route::get('/registration', function () {
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration.get');
// Route::post('/registration', function () {
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
   
    Route::get('/profile',function(){
        return "hi";
    });

});

//protected routes for logged in users
Route::group(['middleware' => ['auth']], function () {
   
    Route::get('/profile',function(){
        return "hi";
    });

});


Route::get('/logout', [AuthManager::class, 'logout'])->name('logout.get');

//for the promote to admin
Route::post('/promote-to-admin/{user}', [UserController::class, 'promoteToAdmin'])->name('promote.to.admin');


//protected routes for admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    // Place your admin-only routes here
    Route::get('/admin', function() {
        return view('auth.adminpanel');
    });

});