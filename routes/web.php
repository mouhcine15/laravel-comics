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
*/

Route::get('/', function () {
    $fumetti = config('comics');
    $headerList = config('headerList');
    $mainList = config('mainList');
    return view('home', [
        'fumetti' => $fumetti,
        'headerList' => $headerList,
        'mainList' => $mainList,
    ]);
})->name('home');


Route::get('/home/{series}', function ($series) {
    $fumetti = null;
    foreach (config('comics') as $value){
        if ($value['series'] == $series){
            $fumetti = $value;
            break;
        }
    }

    if ($fumetti) {
        return view('prodotto',[
            'pageTitle' => 'Fumetti - Homepage',
            'comics'    => $fumetti,
        ]);
    } else {
        abort(404);
    }
})->name('prodotto');


Route::get('/prodotto', function () {
    $headerList = config('headerList');
    $fumetti = config('comics');
    return view('prodotto', [
        'headerList' => $headerList,
        'fumetti' => $fumetti,
    ]);
})->name('prodotto');
