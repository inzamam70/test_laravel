<?php

use App\Http\Controllers\Slider\SliderController;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

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
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/registration', function () {
//     return view('registration');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/slider', function () {
//     return view('<p>slider</p>');
// });

Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
Route::get('/slider/{id}', [SliderController::class, 'show'])->name('slider.show');
