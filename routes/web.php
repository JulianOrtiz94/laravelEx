<?php

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
    $links = [
        'https://platzi.com/clases/curso-php-laravel/' => 'Curso Laravel',
        'https://laravel.com/' => 'Laravel'
    ];
    
    return view('welcome',[
        'links' => $links
    ]);
});

Route::get('/about', function () {
    return view('about');
});