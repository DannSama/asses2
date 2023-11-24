<?php

use App\Http\Controllers\control;
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

Route::get('/add_data', function () {
    return view('Data/add');
});


Route::get('/welcome', function () {
    return view('Data/home');
});

// routes/web.php

//use App\Http\Controllers\YourControllerName;

//Route::get('/welcome', [control::class, 'redirectToAnotherPage']);
