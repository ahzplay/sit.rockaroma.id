<?php

namespace App\Http\Controllers;

use App\Mail\forgotPasswordEmail;
use App\Mail\MemberRegistrationEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
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

            try{
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
                        return response()->json(array('status'=>'fail','message'=>'Your password is wrong'), 200);
                    }
                } else {
                    return response()->json(array('status'=>'fail','message'=>'Your account is not able to login'), 200);
                }
            } catch(Exception $e) {
                return response()->json(array('status'=>'fail','message'=>'System error, please contact our Support Team'), 200);
            }

        }
    }

    public function dologout(Request $request){
        $request->session()->flush();
        return redirect('login-page');
    }

    public function resetPassword(Request $request) {
        $validator = Validator::make($request->all(),
            [
                'email' => 'required|email',
            ],
            [
                'email.required' => 'Email cannot be empty',
                'email.email' => 'Invalid email format',
            ]);

        if($validator->fails()){
            return response()->json(array('status'=>'fail','message'=>$validator->errors()->first()), 200);
        }

        $user = User::with('role')->where('email', $request->email)->first();

        if(empty($user)) {
            return response()->json(array('status'=>'fail','message'=>'Email not found'), 200);
        } else {
            try{
                $code = rand(10000001,99999999);
                User::where('id', $user->id)->update(['forgot_password_code'=>$code]);

                $data = array(
                    'link' => env('LIVE_URL').'reset-password-page/'.urlencode(base64_encode($code))
                );
                Mail::to($request->email)->send(new forgotPasswordEmail($data));
                return response()->json(array('status'=>'success','message'=>'Please check your email to reset your password.'), 200);
            } catch(Exception $e) {
            }
        }
    }

    public function resetPasswordValidation(Request $request) {
        try{
            $codeConfirmation = urldecode(base64_decode($request->codeConfirmation));
            //die($codeConfirmation);
            //die(env('LIVE_URL').'login-page'); MQ%3D%3D => 1
            $checking = User::where('forgot_password_code',$codeConfirmation)
                ->where('forgot_password_code', '!=', 1)
                ->count();

            if($checking >= 1) {
                return view('resetPassword')->with(array('codeConfirmation'=>$request->codeConfirmation));
                exit;
            } else {
                echo "
                    <html>
                        <head>
                            <title>Process Failed</title>
                            <style>
                                .box{
                                    position: fixed;
                                    top: 40%;
                                    left: 29%;
                                    font-family: Arial, Helvetica, sans-serif;
                                }
                            </style>
                        </head>
                        <body>
                            <div class='box'>
                                <center>
                                    <h2>Something wrong ! <br> Process failed, please contact our support team.</h2>
                                </center>
                            </div>
                        </body>
                    </html>
                ";
            }
        } catch(Exception $e) {

        }
    }

    public function changePassword(Request $request) {
        $codeConfirmation = base64_decode($request->codeConfirmation);
        $validator = Validator::make($request->all(),[
            'password'=>'required|string|min:6|confirmed',
        ],
            [
                'password.required' => 'Password cannot be empty',
                'password.confirmed' => 'Your password is not match'
            ]
        );

        if($validator->fails()){
            return response()->json(array('status'=>'fail','message'=>$validator->errors()->first()), 200);
        }

        try{
            $doUpdate = User::where('forgot_password_code',$codeConfirmation)
                ->where('forgot_password_code', '!=', 1)
                ->update(array(
                    'forgot_password_code' => 1,
                    'password' => app('hash')->make($request->password)
                ));

            if($doUpdate) {
                return response()->json(array('status'=>'success','message'=>'Password Changed'), 200);
            } else {
                return response()->json(array('status'=>'fail','message'=>'Password cannot changed, please contact administrator'), 200);
            }
        } catch(Exception $e) {
            return response()->json(array('status'=>'fail','message'=>'System error, please contact administrator'), 200);
        }

    }
}
