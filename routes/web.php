<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('/', '/index')->name('index');

Route::get("/index", function () {
    return view('index');
});

Route::post('/addData', function (Request $request) {
    if ($request['type'] == "book") {
        \App\Http\Controllers\BookController::store($request);
    } else if ($request['type'] == "cd") {
        \App\Http\Controllers\CdController::store($request);
    }
    return redirect()->route('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
