<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPage extends Controller
{
    public function index(){
        
        return view('index');
    }
    public function blog(){
        
        return view('blog');
    }
    public function about(){
        
        return view('about');
    }
    public function shop(){
        
        return view('shop');
    }
}
