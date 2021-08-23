<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $suppliers = Supplier::select('id','name')->get();
        $products = product::all();
        
        return view('pembelian',compact('suppliers'),compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request);
        request()->validate([
            'invoice'=>['required','string','min:3'],
            'transaction_date'=>['required'],
        ]);

        $date = Carbon::parse($request->date);

        Supplier::create([
            'id'=>(string) Str::uuid(),
            'invoice'=>$request->invoice,
            'transaction_date'=>$date,
        ]);

        $suppliers = Supplier::where('invoice',$request->invoice);

        $suppliers->product()->attach($request->prodID,[
            'quantity'=>$request->quantity,
            'cost'=>$request->cost,
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
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(purchase $purchase)
    {
        //
    }
}
