<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return ('Selamat Datang');
    }

    public function about(){
        return ('Nama : Yusyac Miftachul Huda Fi Ali <br> NIM  : 1941720229');
    }

    public function article($page){
        return ('Halaman Artikel ID '.$page);
    }
}
