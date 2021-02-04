<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function doLogin(Request $request){
        $validator = Validator::make($request->all(),
            [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string',
            ],
            [
                'email.required' => 'Email cannot be empty',
                'email.email' => 'Invalid email format',
                'password.required' => 'Password cannot be empty',
            ]);

        if($validator->fails()){
            return response()->json(array('status'=>'fail','message'=>$validator->errors()->first()), 200);
        }

        $user = User::with('role')->where('email', $request->email)->first();

        if(empty($user)){
            return response()->json(array('status'=>'fail','message'=>'Email not found'), 200);
        } else {
            /*if($user->code_confirmation != 1) {
                return response()->json(array('status'=>'fail','message'=>'Please verify account, check your email'), 200);
            }*/

            if(empty($user->role)) {
                return response()->json(array('status'=>'fail','message'=>'Make sure you already register'), 200);
            }
            $roleCheck = 0;
            foreach($user->role as $val) {
                if($val->id == 2){
                    $roleCheck = 1;
                }
            }

            if($roleCheck == 1) {
                if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('isLogin', true);
                    return response()->json(array('status'=>'success',$user), 200);
                } else {
                    return response()->json(array('status'=>'fail',$user), 200);
                }
            } else {
                return response()->json(array('status'=>'fail','message'=>'Your account is not able to login'), 200);
            }

        }
    }

    public function dologout(Request $request){
        $request->session()->flush();
        return redirect('login-page');
    }
}
