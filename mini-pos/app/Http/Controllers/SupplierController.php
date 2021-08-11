<?php

namespace App\Http\Controllers;

use App\Models\province;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::join('villages','villages.id','=','suppliers.village_id')
                    ->join('districts','districts.id','=','villages.district_id')
                    ->join('regencies','regencies.id','=','districts.regency_id')
                    ->join('provinces','provinces.id','=','regencies.province_id')
                    ->select(
                        'suppliers.id as id',
                        'suppliers.name as supplier_name',
                        'telp',
                        'address',
                        'villages.name as village_name',
                        'districts.name as district_name',
                        'regencies.name as regency_name',
                        'provinces.name as province_name')
                    ->orderBy('suppliers.updated_at')
                    ->get();

        $provinsi = province::all();
        return view('supplier',compact('suppliers'),compact('provinsi'));
    }

    public function create(Request $request)
    {
        request()->validate([
            'name'=>['required','string','min:3'],
            'telp'=>['required','digits_between:10,15'],
            'address'=>['required','string','min:3'],
            'village_id'=>['required','uuid'],
        ]);

        Supplier::create([
            'id'=>(string) Str::uuid(),
            'name'=>$request->name,
            'telp'=>$request->telp,
            'address'=>$request->address,
            'village_id'=>$request->village_id,
        ]);
        return back();
    }

    public function delete($id)
    {
        Supplier::where('id',$id)->first()->delete();

        return back();
    }
}
