<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request) {

        $request->session()->put('menu-active-home', '');
        $request->session()->put('menu-active-article', '');
        $request->session()->put('menu-active-video', 'active');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', '');
        $request->session()->put('menu-title', 'Video');

        $request->session()->put('category-active', $request->categoryId);

        //$videos = $this->fetchVideos($request->page);
        $videos = $this->fetchVideos(array('page'=>$request->page,'showAll'=>$request->showAll,'categoryId'=>$request->categoryId));
        $category = $this->fetchCategories();
        $data = array(
            'raw' => $videos['raw'],
            'row' => $videos['row'],
            'page' => $videos['page'],
            'category' => $category
        );

        //return json_encode($data);
        return view('videoPage')->with($data);
    }

    public function fetchVideos($param){
        /*$page = intval($page);
        $rows = 9;//isset($param['rows']) ? intval($param['rows']) : 9;
        $offset = ($page-1)*9;
        $total = Video::where('is_active',1)->count();
        $row = Video::where('is_active',1)->skip($offset)->take($rows)->count();
        $raw = Video::where('is_active',1)->skip($offset)->take($rows)->orderBy('id','desc')->get();
        $page = ceil($total/$rows);
        return array(
            'row' => $row,
            'raw' => $raw,
            'page' => $page
        );*/

        $param=array('page'=>$param['page'], 'showAll'=>$param['showAll'],'categoryId'=>$param['categoryId']);

        $page = intval($param['page']);
        $rows = 12;//isset($param['rows']) ? intval($param['rows']) : 9;
        $offset = ($page-1)*12;

        $total = Video::with('category')
            ->whereHas('category', function($q) use ($param){
                if($param['showAll'] == 1) {
                    $q->where('category_id','like', '%%');
                } else {
                    $q->where('category_id',$param['categoryId']);
                }
            })->where('is_active', 1)->count();

        $row = Video::with('category')
            ->whereHas('category', function($q) use ($param){
                if($param['showAll'] == 1) {
                    $q->where('category_id','like', '%%');
                } else {
                    $q->where('category_id',$param['categoryId']);
                }

            })->where('is_active', 1)->skip($offset)->take($rows)->count();

        $raw = Video::with('category')
            ->whereHas('category', function($q) use ($param){
                if($param['showAll'] == 1) {
                    $q->where('category_id','like', '%%');
                } else {
                    $q->where('category_id',$param['categoryId']);
                }

            })->where('is_active', 1)->skip($offset)->take($rows)->orderBy('id', 'desc')->get();
        $page = ceil($total/$rows);
        return array(
            'row' => $row,
            'raw' => $raw,
            'page' => $page
        );

        return response()->json($raw);

    }

    public function fetchCategories(){
        return Category::where('related_table', 'videos')->get();
    }
}
