@extends('layout.layout')

@section('judul','Riwayat Mutasi Penjualan')

@section('main_content')
<section class="content">
<div class="container-fluid">

    <div class="container mb-1 mt-1">
    <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No.Invoice</th>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Price Total</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No.Invoice</th>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Price Total</th>
            </tr>
        </tfoot>
 
        <tbody>
            @foreach($sale as $sale)
                <tr>
                <th scopes="row">{{ $loop->iteration}}</th>
                <td>{{ $sale->transaction_date }}</td>
                <td>{{ $sale->invoice }}</td>
                <td> </td>
                <td> </td>
                <td>{{ $sale->price_total }}</td>
                {{-- <td>{{ $cust->addess }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
<a class="btn btn-primary" href="/mutasi" role="back">Kembali</a>
</section>

@endsection


