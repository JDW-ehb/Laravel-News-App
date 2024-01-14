<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;

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
// main page & news
Route::get('/', [NewsController::class, 'latestNews'])->name('latest-news');

// creation of pages
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create')->middleware('auth'); // Assuming only authenticated users can create articles
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');


//navigation to the full articles:
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// faq's page:
// Existing route
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');

// Admin routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/faqs/create', [FaqController::class, 'create'])->name('faqs.create');
    Route::post('/faqs', [FaqController::class, 'store'])->name('faqs.store');
    Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
    Route::put('/faqs/{faq}', [FaqController::class, 'update'])->name('faqs.update');
    Route::delete('/faqs/{faq}', [FaqController::class, 'destroy'])->name('faqs.destroy');
});


// Route::get('/login', function () {
Route::get('/login', [AuthManager::class, 'login'])->name('login.get');
// Route::post('/login', function () {
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

// Route::get('/registration', function () {
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration.get');
// Route::post('/registration', function () {
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout.get');



//protected routes for logged in users
Route::group(['middleware' => ['auth']], function () {
   
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');


});


Route::get('/logout', [AuthManager::class, 'logout'])->name('logout.get');

//for the promote to admin
Route::post('/promote-to-admin/{user}', [UserController::class, 'promoteToAdmin'])->name('promote.to.admin');


//protected routes for admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    // Place your admin-only routes here
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/promote-to-admin/{user}', [AdminController::class, 'promoteToAdmin'])->name('promote.to.admin');
    Route::post('/demote-from-admin/{user}', [AdminController::class, 'demoteFromAdmin'])->name('demote.from.admin');
    Route::delete('/admin/users/{user}', [AdminController::class, 'destroy'])->name('user.destroy')->middleware('admin');


});


//update your profile avatar
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
Route::post('/profile/update/name', [ProfileController::class, 'updateName'])->name('profile.update.name');
Route::post('/profile/update/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.update.avatar');

// contact form & view 
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/messages', [ContactController::class, 'showMessages'])->name('messages.show');


// about page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');