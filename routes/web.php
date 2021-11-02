<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add', function () {
    return view('add');
});

// Route::post('/add', function () {
//    $add =new Add();
//    $add->firstname=request('fname');
//    $add->lastname=request('lname');
//    $add->email=request('email');
//    $add->phone=request('phno');
//    $add->save();
//    return redirect('/add');

// });

Route::post('/add', [AddController::class,'index']);

Route::get('/view', function () {
    return view('view');
});