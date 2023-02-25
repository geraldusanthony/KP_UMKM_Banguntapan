<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kritiksaran_Controller;

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

Route::get('/profil', function () {
    return view('profil');
});
Route::post('/kritiksaran','Kritiksaran_Controller@kritiksaran');

Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/home','admin_Controller@home');
Route::get('/kritiksaran','admin_Controller@kritiksaran');
Route::get('/cetak_pdf', 'Kritiksaran_Controller@cetak_pdf');

