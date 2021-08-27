@extends('layout.layout')

@section('judul','Riwayat Mutasi Pembelian')


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
                <th>Transaksi</th>
                <th>QTY Mutasi Masuk</th>
                <th>QTY Mutasi Keluar</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No.Invoice</th>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Transaksi</th>
                <th>QTY Mutasi Masuk</th>
                <th>QTY Mutasi Keluar</th>
            </tr>
        </tfoot>
 
        <tbody>
            <tr>
                <td>1</td>
                <td>12/12/2021</td>
                <td>2021/INV/1001</td>
                <td>BRSKRG-LELE</td>
                <td>Beras Karung Merk Lele</td>
                <td>Penjualan</td>
                <td>0</td>
                <td>4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>11/12/2021</td>
                <td>2021/INV/0001</td>
                <td>BRSKRG-LELE</td>
                <td>Beras Karung Merk Lele</td>
                <td>Pembelian</td>
                <td>25</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
<a class="btn btn-primary" href="/mutasi" role="back">Kembali</a>
</section>

@endsection

