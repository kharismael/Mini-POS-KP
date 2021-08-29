<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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

        $suppliers = Supplier::select('id', 'name')->get();

        return view('purchases.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        request()->validate([
            'invoice' => ['required', 'string', 'min:3'],
            'supplier_id' => ['required', 'UUID'],
            'date' => ['required'],
        ]);

        $date = Carbon::createFromFormat('m/d/Y', $request->date);
        purchase::create([
            'id' => (string) Str::uuid(),
            'supplier_id' => $request->supplier_id,
            'invoice' => $request->invoice,
            'price_total' => null,
            'transaction_date' => $date,
        ]);
        $purchase = purchase::where('invoice', $request->invoice)->latest()->first();

        return redirect('pembelian/' . $purchase->id);
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
    public function show()
    {
        $purcprod = purchase::join('purchases_products', 'purchases_id', '=', 'purchases.id')
            ->join('products', 'products.id', '=', 'purchases_products.product_id')
            ->orderBy('purchases.transaction_date')
            ->get()
            ->map(function ($purcprod) {
                $total = $purcprod->cost * $purcprod->quantity;

                return [
                    'transaction_date' => $purcprod->transaction_date,
                    'invoice' => $purcprod->invoice,
                    'product_name' => $purcprod->name,
                    'sku' => $purcprod->sku,
                    'quantity' =>  $purcprod->quantity,
                    'total' => $total,
                ];
            });
        return view('mutasi.purchases', compact('purcprod'));
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

    public function purchases($id)
    {
        $products = product::all();

        $purcprod = purchase::where('id', $id)->first()
            ->purchase()
            ->get()
            ->map(function ($purcprod) {
                $total = $purcprod->pivot->cost * $purcprod->pivot->quantity;

                return [
                    'id' => $purcprod->pivot->id,
                    'name' => $purcprod->name,
                    'category' => $purcprod->category,
                    'cost' => $purcprod->pivot->cost,
                    'quantity' =>  $purcprod->pivot->quantity,
                    'total' => $total,
                ];
            });
        return view('purchases.purchasesproduct', compact('products', 'purcprod', 'id'));
    }

    public function purchaseStore($purchase_id, $product_id, Request $request)
    {
        request()->validate([
            'cost' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
        ]);

        $purchase = purchase::where('id', $purchase_id)->first();
        $purchase->purchase()->attach($product_id, [
            'id' => (string) Str::uuid(),
            'quantity' => $request->quantity,
            'cost' => $request->cost,
        ]);


        return back();
    }

    public function purchaseDelete($purchase_id, $pivot_id)
    {
        DB::table('purchases_products')->where('id', $pivot_id)->delete();

        return back();
    }

    public function endpurchases($id)
    {
        $total = DB::table('purchases_products')
            ->where('purchases_id', $id)
            ->select(DB::raw('sum(quantity * cost) as sumTotal'))
            ->get();

        purchase::where('id', $id)
            ->update([
                'price_total' => $total[0]->sumTotal,
            ]);

        return redirect('/pembelian');
    }

    public function deletePurchases($id)
    {
        $purc = purchase::where('id', $id)->first();
        // dd($purc);
        $purc->purchase()->detach();
        $purc->delete();

        return redirect('/pembelian');
    }
}
