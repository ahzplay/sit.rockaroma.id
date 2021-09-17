<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request) {
        //echo json_encode($this->fetchArticles(array('page'=>$request->page,'searchKeyword'=>$request->searchKeyword)));
        //echo $request->keyword; die();
        //die();
        $request->session()->put('menu-active-home', '');
        $request->session()->put('menu-active-article', 'active');
        $request->session()->put('menu-active-video', '');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', '');
        $request->session()->put('menu-title', 'News');

        $articles = $this->fetchArticles(array('page'=>$request->page,'searchKeyword'=>$request->keyword));
        $topThree = $this->fetchArticlesTopThree();
        $data = array(
            'topThree' => $topThree,
            'raw' => $articles['raw'],
            'row' => $articles['row'],
            'page' => $articles['page'],
        );
        return view('articlePage')->with($data);
    }

    public function detailPage(Request $request) {
        $request->session()->put('menu-active-home', '');
        $request->session()->put('menu-active-article', 'active');
        $request->session()->put('menu-active-video', '');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', '');
        $data = array(
            'articleContent' =>$this->getArticle($request->articleId),
        );
        return view('articleDetailPage')->with($data);
    }

    public function fetchArticles($param=array()){
        $searchKeyword = $param['searchKeyword'];
        $page = intval($param['page']);
        $rows = 9;//isset($param['rows']) ? intval($param['rows']) : 9;

        $offset = ( ($page-1)*9 ) + 3;
        $total = Article::where('is_active',1)->count();
        /*$row = Article::where('is_active',1)
            ->skip($offset)
            ->take($rows)
            ->orderby('created_at', 'desc')
            ->count();
        $raw = Article::where('is_active',1)
            ->where('title', 'like', '%' . $searchKeyword . '%')
            ->skip($offset)
            ->take($rows)
            ->orderby('created_at', 'desc')
            ->get();
        $page = ceil($total/$rows);*/

        if($searchKeyword != '' || $searchKeyword != null) {
            $offset = ( ($page-1)*9 ) + 3;
            $row = Article::where('is_active',1)
                ->where('title', 'like', '%' . $searchKeyword . '%')
                //->skip($offset)
                //->take($rows)
                ->orderby('created_at', 'desc')
                ->count();
            $raw = Article::where('is_active',1)
                ->where('title', 'like', '%' . $searchKeyword . '%')
                ->orWhere('content', 'like', '%' . $searchKeyword . '%')
                //->skip($offset)
                //->take($rows)
                ->orderby('created_at', 'desc')
                ->get();
            $page = ceil($row/$rows);
        } else if($searchKeyword == '' || $searchKeyword == null) {
            $offset = ( ($page-1)*9 ) + 3;
            $total = Article::where('is_active',1)->count();
            $row = Article::where('is_active',1)
                ->skip($offset)
                ->take($rows)
                ->orderby('created_at', 'desc')
                ->count();
            $raw = Article::where('is_active',1)
                ->where('title', 'like', '%' . $searchKeyword . '%')
                ->orWhere('content', 'like', '%' . $searchKeyword . '%')
                ->skip($offset)
                ->take($rows)
                ->orderby('created_at', 'desc')
                ->get();
            $page = ceil($total/$rows);
        }

        return array(
            'row' => $row,
            'raw' => $raw,
            'page' => $page
        );
    }

    public function fetchArticlesTopThree($param=array()){
        $raw = Article::where('is_active',1)->take(3)->orderby('created_at', 'desc')->get();
        return $raw;
    }

    public function getArticle($id) {
        $raw = Article::where('id', $id)->first();
        return $raw;
    }


}
