<?php

namespace App\Http\Controllers;

use App\Models\DashboardSlider;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class LandingPageController extends Controller
{

    public function  __construct(Request $request)
    {

    }

    public function index(Request $request){
        //echo $this->fetchSliders(); die();
        $request->session()->put('menu-active-home', 'active');
        $request->session()->put('menu-active-article', '');
        $request->session()->put('menu-active-video', '');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', '');
        $data = array(
            'videos' => $this->fetchVideos(),
            'sliders' => $this->fetchSliders()
        );
        return view('landingPage')->with($data);
    }

    public function fetchSliders(){
        $raw = DashboardSlider::orderBy('order','asc')->get();

        return $raw;

    }

    public function fetchVideos(){
        $data = array(
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

        return $data;
    }
}


