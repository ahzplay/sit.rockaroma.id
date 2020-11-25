<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleDetail extends Controller
{
    public function index(Request $request) {
        $request->session()->put('menu-active-home', '');
        $request->session()->put('menu-active-article', 'active');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', '');
        $data = array(
            'videos' =>''
        );
        return view('articleDetail')->with($data);
    }
}
