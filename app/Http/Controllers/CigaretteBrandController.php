<?php

namespace App\Http\Controllers;

use App\Models\CigaretteBrand;
use Illuminate\Http\Request;

class CigaretteBrandController extends Controller
{
    public function fetchCigarettes() {
        $raw = CigaretteBrand::get();
        //return response()->json($raw);
        return $raw;
    }
}
