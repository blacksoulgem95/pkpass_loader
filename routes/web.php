<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/pass', function(Request $request) {
    $file = $request->file('pass');

    $headers = [
        'Content-Type' => 'application/vnd.apple.pkpass'
    ];

    return response()->download($file->getPathname(), $file->getClientOriginalName(), $headers)
        ->setContentDisposition('inline', $file->getClientOriginalName(), 'pass.pkpass');
//        ->header('Content-Type', 'application/vnd.apple.pkpass')
//        ->header('Content-Disposition', 'inline; filename="'.$file->getBasename().'"');
})->name('pass.upload');
