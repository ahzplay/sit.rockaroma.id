<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function fetchCities(){
        $raw = Region::select('code as city_code','name as city_name')
            ->whereRaw("char_length(`code`) = '5'")
            ->get();

        //return response()->json($raw);
        return $raw;
    }

    public function getCities(Request $request){
        $raw = Region::select('code as city_code','name as city_name')
            ->whereRaw("char_length(`code`) = '5'")
            ->whereRaw("SUBSTR(code,1,2) = ?")
            ->setBindings([$request->provinceCode])
            ->get();

        //return response()->json($raw);
        return $raw;
    }

    public function fetchProvinces(){
        $raw = Region::select('code as province_code','name as province_name')
            ->whereRaw("char_length(`code`) = '2'")
            ->get();

        //return response()->json($raw);
        return $raw;
    }
}
