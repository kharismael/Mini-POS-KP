<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::get()
            ->map(function ($product) {
                $profit = $product->price - $product->cost;
                $profitNum = number_format($profit, "2", ",", ".");
                $priceNum = number_format($product->price, "2", ",", ".");

                $quantity = $product->purcprod()->sum('quantity') - $product->saleprod()->sum('quantity');
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'sku' => $product->sku,
                    'category' => $product->category,
                    'cost' => $product->cost,
                    'price' => $product->price,
                    'profit_num' => $profitNum,
                    'price_num' => $priceNum,
                    'quantity' => $quantity,
                ];
            });
        return view('products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name' => 'required|min:3',
                'sku' => 'required|min:3',
                'cost' => 'required|numeric',
                'price' => 'required|numeric',
            ],
            [
                'name.required' => 'Kolom ini harus diisi',
                'name.min' => 'Nama minimal 3 karakter',
                'sku.required' => 'Kolom ini harus diisi',
                'sku.min' => 'SKU Minimal 3 karakter',
                'cost.required' => 'Kolom ini harus diisi',
                'cost.numeric' => 'hanya boleh diisi angka',
                'price.required' => 'Kolom ini harus diisi',
                'price.numeric' => 'hanya boleh diisi angka',
            ]
        );

        product::create([
            'id' => (string) Str::uuid(),
            'name' => $request->name,
            'category' => $request->category,
            'sku' => $request->sku,
            'cost' => $request->cost,
            'price' => $request->price,
        ]);
        return redirect()->back()->with('sukses', 'Data berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $quantity = DB::table('sales_products')->join('purchase_products', 'product_id', '=', 'sales.product_id')
        //     ->join('products', 'products.id', '=', 'sales_products.product_id')
        //     ->select(
        //         'sales_products.quantity as sales_qty',
        //         'purchases_products.quantity as purchases_qty',
        //         'products.name as product_name'
        //     )
        //     ->get()
        //     ->map(function ($quantity) {
        //         $stock = $quantity->purchases_qty - $quantity->sales_qty;
        //         return [
        //             'stok' => $stock
        //         ];
        //     });
        // return view('products.index', compact('quantity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate(
            [
                '_name' => 'required|min:3',
                '_sku' => 'required|min:3',
                '_cost' => 'required|numeric',
                '_price' => 'required|numeric',
            ],
            [
                '_name.required' => 'Kolom ini harus diisi',
                '_name.min' => 'Nama minimal 3 karakter',
                '_sku.required' => 'Kolom ini harus diisi',
                '_sku.min' => 'SKU Minimal 3 karakter',
                '_cost.required' => 'Kolom ini harus diisi',
                '_cost.numeric' => 'hanya boleh diisi angka',
                '_price.required' => 'Kolom ini harus diisi',
                '_price.numeric' => 'hanya boleh diisi angka',
            ]
        );

        product::find($id)->update([
            'name' => $request->_name,
            'category' => $request->_category,
            'sku' => $request->_sku,
            'cost' => $request->_cost,
            'price' => $request->_price,
        ]);

        return redirect()->back()->with('sukses', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::find($id);
        $product->purcprod()->detach();
        $product->saleprod()->detach();
        $product->delete($product);
        return redirect()->back()->with('sukses', 'Data berhasil dihapus!');
    }
}
