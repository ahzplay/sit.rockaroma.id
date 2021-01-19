<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\DashboardSlider;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\View\View;
use MongoDB\Driver\Session;

class LandingPageController extends Controller
{

    public function  __construct(Request $request)
    {

    }

    public function index(Request $request){
        //echo json_encode($this->fetchArticlesTopThree()); die();
        $request->session()->put('menu-active-home', 'active');
        $request->session()->put('menu-active-article', '');
        $request->session()->put('menu-active-video', '');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', '');
        $data = array(
            'videos' => $this->fetchVideos(),
            'articles' => $this->fetchArticlesTopThree(),
            'sliders' => $this->fetchSliders(),
        );
        return view('landingPage')->with($data);
    }

    public function fetchSliders(){
        $raw = DashboardSlider::where('is_active', 1)->orderBy('order','asc')->get();

        return $raw;

    }

    public function fetchArticlesTopThree(){
        $raw = Article::where('is_active',1)->take(3)->orderby('created_at', 'desc')->get();
        return $raw;
    }

    public function fetchVideos(){
        /*$data = array(
            array(
                'title' => 'RockAroma UDUT Eps.2 Pop Punk Bukan Bucin',
                'thumbPath' => 'img/yt.vid3.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/YYbuRZYf_MU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ),
            array(
                'title' => 'RockAroma Showcase #vol.2 | Summerlane',
                'thumbPath' => 'img/yt.vid2.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/CDd_2e9oqVA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ),
            array(
                'title' => 'RockAroma Showcase #vol.1 | StereoWall',
                'thumbPath' => 'img/yt.vid1.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Th_r5mcFoXY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ),
            array(
                'title' => 'Rockaroma UDUT Eps. 9 - Melihat Episode-Episode Sebelumnya Lebih Dalam',
                'thumbPath' => 'img/yt.vid4.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/U0Rn4zpe_ds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ),
            array(
                'title' => 'RockAroma Showcase #Vol.8 | Jendral Kantjil',
                'thumbPath' => 'img/yt.vid5.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/M8K0_S92SoQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ),
            array(
                'title' => 'RockAroma Showcase #Vol.7 | Closehead Reunion',
                'thumbPath' => 'img/yt.vid6.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/-9cylpPqwZ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ),
        );

        return $data;*/

        $raw = Video::where('is_active',1)->take(5)->get();
        return $raw;
    }

    public function aboutUs() {
        return View('aboutUsPage');
    }

    public function termAndCondition() {
        return View('termAndConditionPage');
    }

    function array_sort($array, $on, $order=SORT_ASC)
    {
        $new_array = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }
}


