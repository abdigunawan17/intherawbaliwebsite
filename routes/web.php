<?php

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


Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\FrontpageController::class, 'index'])->name('frontpage');

//Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');

//Route::get('/cafe', [App\Http\Controllers\CafeController::class, 'index'])->name('cafe');

//Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');

//Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('about-us');

//Route::get('/farm', [App\Http\Controllers\FarmController::class, 'index'])->name('farm');

Route::get('/juice', [App\Http\Controllers\JuiceController::class, 'index'])->name('juice');

Route::get('/cobatest', [App\Http\Controllers\CobatestController::class, 'index'])->name('cobatest');

Route::get('/cafe', [App\Http\Controllers\CobatestcafeController::class, 'index'])->name('cobatestcafe');

Route::get('/about-us', [App\Http\Controllers\CobatestaboutController::class, 'index'])->name('cobatestabout');

Route::get('/contact-us', [App\Http\Controllers\CobatestcontactController::class, 'index'])->name('cobatestcontact');

Route::get('/gallery', [App\Http\Controllers\CobatestgalleryController::class, 'index'])->name('cobatestgallery');

Route::get('/farm', [App\Http\Controllers\CobatestfarmController::class, 'index'])->name('cobatestfarm');
