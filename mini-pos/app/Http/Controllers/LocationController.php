<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function show()
    {
        $data = DB::table('villages')
                ->join('districts','districts.id','=','villages.district_id')
                ->join('regencies','regencies.id','=','districts.regency_id')
                ->join('provinces','provinces.id','=','regencies.province_id')
                ->select('villages.name as village_name','districts.name as district_name','regencies.name as regency_name','provinces.name as province_name')
                ->limit(100)
                ->get();
        return view('location',compact('data'));
    }
}
