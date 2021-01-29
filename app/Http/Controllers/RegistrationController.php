<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function login() {
        return view('loginPage');
    }

    public function register() {
        $region = new RegionController();
        $cities = $region->fetchCities();
        $provinces = $region->fetchProvinces();
        $data = array(
            'cities' => $cities,
            'provinces' => $provinces,
        );
        return view('registrationPage')->with($data);
    }

    public function doRegister(Request $request) {
        $validator = Validator::make($request->all(),[
                'fullname'=>'required',
                'email'=>'required',
                'provinceCode'=>'required',
                'cityCode'=>'required',
                'phoneNumber'=>'required',
                'gender'=>'required',
                'smoker'=>'required',
                'password'=>'required',
                'confirmPassword'=>'required',
            ],
            [
                'fullname.required' => 'Fullname cannot be empty',
            ]
        );

        if($validator->fails()){
            return response()->json(array('status'=>'fail','message'=>$validator->errors()->first()), 200);
        }

        //return response()->json($request->all());
    }

}
