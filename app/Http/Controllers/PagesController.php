<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $links = [
            'https://platzi.com/clases/curso-php-laravel/' => 'Curso Laravel',
            'https://laravel.com/' => 'Laravel'
        ];
    
        return view('welcome',[
            'links' => $links
        ]);
    }

    public function about () {
        return view('about');
    }
}
