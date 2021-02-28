<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //public function index(){
    //    return '<a href="https://www.educastudio.com/category/">https://www.educastudio.com/category/</a>';
    //}
    //public function product($id){
    //    return '<a href="https://www.educastudio.com/category/' . $id . '> https://www.educastudio.com/category/' . $id .'</a>';
    //}

    public function product() {
        $data = array (
            'name' => 'Halaman Home',
            'url' => '<a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>'
        );
        return view('product',$data);
       }
}
