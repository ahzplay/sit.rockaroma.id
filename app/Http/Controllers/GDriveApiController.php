<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GDriveApiController extends Controller
{
    public function index() {
        return view('gdriveApi');
    }

    public function callback() {

    }
}
