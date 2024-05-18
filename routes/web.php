<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CarRequestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\FormDataController;




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
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});
Route::get('car', function () {
    return view('car');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('sellwithus', function () {
    return view('sellwithus');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::post('/car-request', 'CarRequestController@store')->name('car-request.store');
Route::post('/car-request', [CarRequestController::class, 'store'])->name('car-request.store');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');




Route::resource('posts', PostController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show']); // This route remains the same
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/car', [CarController::class, 'index']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
});

Route::post('/form-data', [FormDataController::class, 'store'])->name('form-data.store');
