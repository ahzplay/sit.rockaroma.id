<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Mail\MemberRegistrationEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Validator;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function login() {
        return view('loginPage');
    }

    public function forgotPassword() {
        return view('forgotPassword');
    }

    /*public function resetPassword() {
        return view('resetPassword');
    }*/

    public function register() {
        $region = new RegionController();
        $cigaretteBrand = new CigaretteBrandController();
        $cities = $region->fetchCities();
        $provinces = $region->fetchProvinces();
        $cigaretteBrands = $cigaretteBrand->fetchCigarettes();
        $data = array(
            'cities' => $cities,
            'provinces' => $provinces,
            'cigaretteBrands' => $cigaretteBrands
        );
        return view('registrationPage')->with($data);
    }

    public function doRegister(Request $request) {
        //echo json_encode($_POST); die();
        $validator = Validator::make($request->all(),[
                'fullname'=>'required',
                'email'=>'unique:users|required|email|max:255',
                'provinceCode'=>'required',
                'cityCode'=>'required',
                'phoneNumber'=>'required|numeric',
                'gender'=>'required',
                'smoker'=>'required',
                'password'=>'required|string|min:6|confirmed',
            ],
            [
                'fullname.required' => 'Fullname cannot be empty',
                'email.required' => 'Email cannot be empty',
                'email.unique' => 'Email already exist',
                'provinceCode.required' => 'Province cannot be empty',
                'cityCode.required' => 'City cannot be empty',
                'phoneNumber.required' => 'Phone Number cannot be empty',
                'phoneNumber.numeric' => 'Enter valid phone number',
                'gender.required' => 'Gender cannot be empty',
                'smoker.required' => 'Smoker status cannot be empty',
                'password.required' => 'Password cannot be empty',
                'password.confirmed' => 'Your password is not match'
            ]
        );

        if($validator->fails()){
            return response()->json(array('status'=>'fail','message'=>$validator->errors()->first()), 200);
        }

        try{
            $user = new User();
            $user->email = $request->email;
            $user->name = 'member';
            $user->phone_number = $request->phoneNumber;
            $user->password = app('hash')->make($request->password);
            $user->code_confirmation = rand(100000001,999999999);
            $user->save();
            $user->profile()->create([
                'full_name' => $request->fullname,
                'phone_number' => $request->phoneNumber,
                'province_code' => $request->provinceCode,
                'city_code' => $request->cityCode,
                'gender' => $request->gender,
                'is_smoker' => $request->smoker,
                'cigarette_brand_id' => $request->smoker==1?$request->cigaretteBrandId:0,
                'created_at' => date('Y-m-d'),

            ]);
            $user->role()->attach([2]); //2 = role id member

            if($user->id > 0) {
                $data = array(
                  'name' =>$request->fullname,
                  'link' => env('LIVE_URL').'api/email-verification/'.urlencode(base64_encode($user->code_confirmation))
                );
                Mail::to($request->email)->send(new MemberRegistrationEmail($data));
                return response()->json(array('status'=>'success','message'=>'Please check your email to verify your account.'), 200);
            } else {
                return response()->json(array('status'=>'fail','message'=>'Registration failed'), 200);
            }

        } catch(\Illuminate\Database\QueryException $e){
            User::where('email',$request->email)->delete();
            Log::error($e->getMessage());
            return response()->json(array('status'=>'fail','message'=>'Registration failed, please contact administrator'), 200);
        } catch(\Swift_TransportException $e){
            Log::error($e->getMessage());
            $user = new User();
            $user->where('email',$request->email)->delete();
            return response()->json(array('status'=>'fail','message'=>'Registration failed, please contact administrator'), 200);
        }
    }

    public function tesEmail() {
        $data = array(
            'name' => 'adsfasdf',
            'link' => env('LIVE_URL').'api/email-verification/'.urlencode(base64_encode('123'))
        );
        Mail::to('ari.azharr@gmail.com')->send(new MemberRegistrationEmail($data));
    }

    public function emailVerification(Request $request) {
        try{
            $codeConfirmation = urldecode(base64_decode($request->codeConfirmation));
            //die($codeConfirmation);
            //die(env('LIVE_URL').'login-page');
            $doUpdate = User::where('code_confirmation',$codeConfirmation)
                ->update(array(
                    'code_confirmation' => 1,
                    'email_verified_at' => date('Y-m-d H:i:s')
                ));

            if($doUpdate) {
                echo "
                    <html>
                        <head>
                            <title>Verification Success</title>
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
                                    <h2>Hooray.. <br> You have been verified !</h2>
                                </center>
                            </div>
                        </body>
                    </html>
                ";
                header('Location: ' . env('LIVE_URL').'login-page');
                exit;
            } else {
                echo "
                    <html>
                        <head>
                            <title>Verification Failed</title>
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
                                    <h2>Something wrong ! <br> Verification failed, please contact our support team.</h2>
                                </center>
                            </div>
                        </body>
                    </html>
                ";
            }
        } catch(Exception $e) {
            echo "
                    <html>
                        <head>
                            <title>Verification Failed</title>
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
                                    <h2>System Error ! <br> Verification failed, please contact our support team.</h2>
                                </center>
                            </div>
                        </body>
                    </html>
                ";
        }
    }

}
