<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return'Selamat Datang';
    }
    public function about(){
        return'Virza Aulia Rachman 2241720078';
    }
    public function articles($id){
        return 'Halaman artikel dengan ID '.$id;
    }

}
