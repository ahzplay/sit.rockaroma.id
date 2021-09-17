<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Video;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request) {
        $request->session()->put('menu-active-home', '');
        $request->session()->put('menu-active-article', '');
        $request->session()->put('menu-active-video', '');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', 'active');
        $request->session()->put('menu-title', 'Shop');

        $request->session()->put('category-active', $request->categoryId);

        $products = $this->fetchProducts(array('page'=>$request->page,'showAll'=>$request->showAll,'categoryId'=>$request->categoryId));
        $category = $this->fetchCategories();
        //echo json_encode($products); die();
        $data = array(
            'category' => $category,
            'raw' => $products['raw'],
            'row' => $products['row'],
            'page' => $products['page'],
        );
        //return response()->json($data);
        //return response()->json($category);
        return view('shopPage')->with($data);
    }

    public function fetchCategories(){
        return Category::where('related_table', 'products')->get();
    }

    public function fetchProducts($param=array()) {
        $param=array('page'=>$param['page'], 'showAll'=>$param['showAll'],'categoryId'=>$param['categoryId']);

        $page = intval($param['page']);
        $rows = 12;//isset($param['rows']) ? intval($param['rows']) : 9;
        $offset = ($page-1)*12;

        $total = Product::with('category')
            ->whereHas('category', function($q) use ($param){
                if($param['showAll'] == 1) {
                    $q->where('category_id','like', '%%');
                } else {
                    $q->where('category_id',$param['categoryId']);
                }
            })->where('status', 1)->count();

        $row = Product::with('category')
            ->whereHas('category', function($q) use ($param){
                if($param['showAll'] == 1) {
                    $q->where('category_id','like', '%%');
                } else {
                    $q->where('category_id',$param['categoryId']);
                }

            })->where('status', 1)->skip($offset)->take($rows)->count();

        $raw = Product::with('category')
            ->whereHas('category', function($q) use ($param){
                if($param['showAll'] == 1) {
                    $q->where('category_id','like', '%%');
                } else {
                    $q->where('category_id',$param['categoryId']);
                }

            })->where('status', 1)->skip($offset)->take($rows)->orderBy('id', 'desc')->get();
        $page = ceil($total/$rows);
        return array(
            'row' => $row,
            'raw' => $raw,
            'page' => $page
        );

        return response()->json($raw);
    }
}
