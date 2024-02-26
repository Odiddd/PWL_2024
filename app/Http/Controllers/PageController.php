<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Dido Imam Padmanegara 2241720111';
    }

    public function articles($id){
        return 'Halaman Artikel dengan id '.$id;
    }
}
