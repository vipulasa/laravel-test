<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('contact', \App\Http\Controllers\ContactController::class);



// Route::get('/user/{user}', function (Request $request, User $user) {

//     // $user = (new User())->where('id', $id)->first();

//     dd($user);

// });


// Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show']);

// Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'save']);

// Route::get('/hello', function () {
//     return view('hello', [
//         'name' => 'John'
//     ]);
// });
