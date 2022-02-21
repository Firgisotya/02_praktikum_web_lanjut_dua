<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return '<h1>Selamat Datang</h1>';
    }

    public function about(){
        return
    '<h3>Nama : Firgi Sotya Izzuddin</h3>'.
    '<h3>Nim  : 2041720207</h3>';
    }

    public function article($id){
        return 'Ini Halaman article '. $id;
    }
}
