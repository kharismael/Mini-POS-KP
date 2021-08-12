<?php

namespace App\Http\Controllers;

use App\Models\district;
use App\Models\regency;
use App\Models\village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function getRegency(Request $request)
    {
        $regency = regency::where('province_id',$request->province_id)
        ->pluck('name','id');

        return response()->json($regency);
    }

    public function getDistrict(Request $request)
    {
        $district = district::where('regency_id',$request->regency_id)
        ->pluck('name','id');

        return response()->json($district);
    }

    public function getVillage(Request $request)
    {
        $village = village::where('district_id',$request->district_id)
        ->pluck('name','id');

        return response()->json($village);
    }
}
