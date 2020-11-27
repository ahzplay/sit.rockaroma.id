<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request) {
        $request->session()->put('menu-active-home', '');
        $request->session()->put('menu-active-article', '');
        $request->session()->put('menu-active-video', '');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', 'active');

        /*$articles = $this->fetchArticles(array('page'=>$request->page,'searchKeyword'=>$request->keyword));
        $topThree = $this->fetchArticlesTopThree();
        $data = array(
            'topThree' => $topThree,
            'raw' => $articles['raw'],
            'row' => $articles['row'],
            'page' => $articles['page'],
        );*/
        return view('shopPage');
    }
}
