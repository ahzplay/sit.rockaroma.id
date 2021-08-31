<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function profilePage(Request $request) {
        $userId = $request->session()->get('userId');
        $user = new User();
        $data = $user->where('id', $userId)->with('profile')->first();
        $region = new RegionController();
        $cigaretteBrand = new CigaretteBrandController();
        $cities = $region->fetchCities();
        $provinces = $region->fetchProvinces();
        $cigaretteBrands = $cigaretteBrand->fetchCigarettes();
        $data = array(
            'cities' => $cities,
            'provinces' => $provinces,
            'cigaretteBrands' => $cigaretteBrands,
            'userData' => $data,
        );
        return view('memberProfilePage')->with($data);
    }

    function updateProfile(Request $request) {
        $userId = $request->session()->get('userId');
        $profile = Profile::where('user_id', $userId)
            ->update([
                'full_name'=>$request->fullname,
                'phone_number'=>$request->phoneNumber,
                'province_code'=>$request->provinceCode,
                'city_code'=>$request->cityCode,
                'gender'=>$request->gender,
                'is_smoker'=>$request->smoker,
                'cigarette_brand_id'=>$request->smoker==1?$request->cigaretteBrandId:0,
            ]);

        if($profile) {
            return response()->json(array('status'=>'success','message'=>'Profile Updated'), 200);
        } else {
            return response()->json(array('status'=>'fail','message'=>'Profile cannot updated, please contact administrator'), 200);
        }

    }

}
