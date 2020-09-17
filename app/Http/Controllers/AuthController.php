<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginAction(Request $request){
        if($request->password == 'superlamp'){
            $request->session()->put('isLogin', true);
            return redirect('landing-page');
        } else {
            return redirect('enter-page');
        }
    }
}
