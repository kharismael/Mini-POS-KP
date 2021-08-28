<?php

namespace App\Http\Controllers;

use App\Models\sale;
use App\Models\customer;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = customer::select('id', 'name')->get();
        return view('sales.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        request()->validate([
            'customer_id' => ['required', 'UUID'],
            'date' => ['required'],
        ]);

        $date = Carbon::createFromFormat('m/d/Y', $request->date);
        $Id = $request->customer_id;
        $newID = substr($Id, -4);
        $no_invoice = 'SL / ' . $date->year . '-' . $date->month . ' / ' . $newID;

        sale::create([
            'id' => (string) Str::uuid(),
            'customer_id' => $request->customer_id,
            'invoice' => $no_invoice,
            'price_total' => null,
            'transaction_date' => $date,
        ]);
        $sale = sale::where('invoice', $no_invoice)->latest()->first();

        return redirect('penjualan/' . $sale->id);
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
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sale = sale::join('sales_products', 'sale_id', '=', 'sales.id')
            ->join('products', 'products.id', '=', 'sales_products.product_id')
            ->orderBy('sales.transaction_date')
            ->get()
            ->map(function ($sale) {
                $total = $sale->price * $sale->quantity;
                return [
                    'transaction_date' => $sale->transaction_date,
                    'invoice' => $sale->invoice,
                    'product_name' => $sale->name,
                    'sku' => $sale->sku,
                    'quantity' =>  $sale->quantity,
                    'total' => $total
                ];
            });
        return view('mutasi.sales', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($sale_id, $pivot_id)
    {
        DB::table('sales_products')->where('id', $pivot_id)->delete();
        return back();
    }

    public function sales($id)
    {
        $products = product::all();
        $saleprod = sale::where('id', $id)->first()
            ->sale()
            ->get()
            ->map(function ($saleprod) {
                $total = $saleprod->pivot->price * $saleprod->pivot->quantity;

                return [
                    'id' => $saleprod->pivot->id,
                    'name' => $saleprod->name,
                    'category' => $saleprod->category,
                    'price' => $saleprod->pivot->price,
                    'quantity' =>  $saleprod->pivot->quantity,
                    'total' => $total,
                ];
            });
        return view('sales.saleproduct', compact('products', 'saleprod', 'id'));
    }

    public function saleStore($sale_id, $product_id, Request $request)
    {

        request()->validate([
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
        ]);

        $sale = sale::where('id', $sale_id)->first();
        $sale->sale()->attach($product_id, [
            'id' => (string) Str::uuid(),
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);


        return back();
    }

    public function endsales($id)
    {
        $total = DB::table('sales_products')
            ->where('sale_id', $id)
            ->select(DB::raw('sum(quantity * price) as sumTotal'))
            ->get();

        sale::where('id', $id)
            ->update([
                'price_total' => $total[0]->sumTotal,
            ]);

        return redirect('/penjualan');
    }

    public function deleteSales($id)
    {
        $sale = sale::where('id', $id)->first();
        // dd($purc);
        $sale->sale()->detach();
        $sale->delete();

        return redirect('/penjualan');
    }
}
