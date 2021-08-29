@extends('layout.layout')

@section('judul','Riwayat Mutasi Pembelian')

@section('main_content')
<section class="content">
<div class="container-fluid">
    <a class="btn btn-primary" href="/mutasi" role="back">Kembali</a>
    <br><br>
    <div class="container mb-1 mt-1">
    <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No.Invoice</th>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Quantity</th>
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
                <th>Quantity</th>
                <th>Price Total</th>
            </tr>
        </tfoot>

        <tbody>
            @foreach($purcprod as $item)
                <tr>
                <th scopes="row">{{ $loop->iteration}}</th>
                <td>{{ $item['transaction_date'] }}</td>
                <td>{{ $item['invoice'] }}</td>
                <td>{{ $item['sku'] }}</td>
                <td>{{ $item['product_name'] }} </td>
                <td>{{ $item['quantity'] }}</td>
                <td>Rp. {{ $item['total'] }}</td>
                {{-- <td>{{ $cust->addess }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</section>

@endsection