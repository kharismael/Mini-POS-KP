<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\province;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = customer::join('villages', 'villages.id', '=', 'customers.village_id')
            ->join('districts', 'districts.id', '=', 'villages.district_id')
            ->join('regencies', 'regencies.id', '=', 'districts.regency_id')
            ->join('provinces', 'provinces.id', '=', 'regencies.province_id')
            ->select(
                'customers.name as name',
                'customers.id as id',
                'telp',
                'address',
                'email',
                'villages.name as village_name',
                'districts.name as district_name',
                'regencies.name as regency_name',
                'provinces.name as province_name'
            )
            ->orderBy('customers.updated_at')
            ->get();
        $province = province::all();
        return view('customer', compact('customer'), compact('province'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'min:3'],
            'telp' => ['required', 'digits_between:10,15'],
            'address' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'min:3'],
            'village_id' => ['required', 'uuid'],
        ]);

        customer::create([
            'id' => (string) Str::uuid(),
            'name' => $request->name,
            'telp' => $request->telp,
            'address' => $request->address,
            'email' => $request->email,
            'village_id' => $request->village_id,
        ]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        customer::destroy($customer->id);
        return redirect('customer')->with('status', 'Customer berhasil dihapus');
    }
}
