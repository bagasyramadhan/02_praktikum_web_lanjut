<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class PageController extends Controller
{
    public function index(){
        echo 'ini adalah halaman index';
    }
    public function about(){
        echo '2141720120, Muhammad Bagas Ramadhan, 2H';
    }
    public function articles($id){
        echo 'Ini merupakan halaman artikel dengan id ' .$id;
    }
    //cek 
}
