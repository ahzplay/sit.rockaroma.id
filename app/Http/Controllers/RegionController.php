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

        return response()->json($raw);
    }
}
