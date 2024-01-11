<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
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

//Show home page
Route::get('/', [bookController::class, 'index']);

//Show create book form
Route::get('/books/add', [bookController::class, 'create'])->middleware('auth');

//manage books
Route::get('/books/manage', [bookController::class, 'manage'])->middleware('auth');

//Show details for book
Route::get('/books/{book}', [bookController::class, 'show']);

//edit book details
Route::get('/books/{book}/edit', [bookController::class, 'edit'])->middleware('auth');

//update book info in database
Route::put('/books/{book}', [bookController::class, 'update'])->middleware('auth');

//delete
Route::delete('/books/{book}', [bookController::class, 'destroy'])->middleware('auth');

//Show book list
Route::get('/books', [bookController::class, 'petsList']);


//Store book on database
Route::post('/books', [bookController::class, 'store'])->middleware('auth');

//Show register form
Route::get('/register', [UserController::class, 'register']);

//Store user on database
Route::post('/users', [UserController::class, 'store']);

//login form
Route::get('/login', [UserController::class, 'login'])->middleware('guest');

//authenticate user and assign session
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//logout user
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/faq', function(){
    return view('pages.faq');
});

Route::get('/testimonies', function(){
    return view('pages.testimonial');
});