<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request) {
        $request->session()->put('menu-active-home', '');
        $request->session()->put('menu-active-article', '');
        $request->session()->put('menu-active-video', 'active');
        $request->session()->put('menu-active-register', '');
        $request->session()->put('menu-active-shop', '');
        $data = array(
            'videos' => $this->fetchVideos()
        );
        return view('videoPage')->with($data);
    }

    public function fetchVideos(){
        $data = array(
            array(
                'title' => 'RockAroma UDUT Eps.2 Pop Punk Bukan Bucin',
                'thumbPath' => 'img/yt.vid3.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/-9cylpPqwZ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
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
                'title' => 'RockAroma UDUT Eps.2 Pop Punk Bukan Bucin',
                'thumbPath' => 'img/yt.vid3.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/-9cylpPqwZ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
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
                'title' => 'RockAroma UDUT Eps.2 Pop Punk Bukan Bucin',
                'thumbPath' => 'img/yt.vid3.png',
                'videoEmbed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/-9cylpPqwZ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
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
        );

        return $data;
    }
}
