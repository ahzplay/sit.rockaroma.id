<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class LandingPageController extends Controller
{

    public function  __construct(Request $request)
    {

    }

    public function index(){
        return view('landingPage');
    }
}


