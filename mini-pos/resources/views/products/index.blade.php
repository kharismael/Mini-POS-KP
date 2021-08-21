
@extends('layout.layout')

@section('judul','Daftar Barang')

@if($errors->any())
@else
    @section('preloader')
        @include('layout.preloader')
    @endsection
@endif

@section('main_content')
<section class="content">
    
<div class="container-fluid">
    
    <div class="container mb-4 mt-2">
        @if(session('sukses'))
            <div class="alert alert-success fade show" role="alert" style="background-color:#c3e6cb; border-color:#d4edda; color:#155724">
                {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-success fade show" role="alert" style="background-color:#f8d7da; border-color:#f5c6cb; color:#721c24">
                Tambah/update data gagal, silahkan cek ulang
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>
        @endif
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#createModal"> <i class="fa fa-plus"></i> Tambah Barang</button>
    </div>
    <div class="container mb-1 mt-1">        
    <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok Gudang</th>
                <th>Harga</th>
                <th>Keuntungan</th>
                <th>Aksi</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>No</th>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok Gudang</th>
                <th>Harga</th>
                <th>Keuntungan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
 
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product['sku'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['category'] }}</td>
                <td>0</td>
                <td>Rp. {{ $product['price_num'] }}</td>
                <td><span class="badge badge-success"> Rp.{{ $product['profit_num'] }}</span></td>
                <td>
                    <a type="button" class="btn btn-warning btn-sm btn-edit"
                    data-id="{{$product['id']}}"
                    data-name="{{$product['name']}}"
                    data-sku="{{$product['sku']}}"
                    data-category="{{$product['category']}}"
                    data-cost="{{$product['cost']}}"
                    data-price="{{$product['price']}}"
                    data-toggle="modal" data-target="#modal-update"
                    ><i class="fa fa-paint-brush"></i>Edit</a>

                    <a href="#" type="button" class="btn btn-danger btn-sm btn-delete"
                    data-id="{{ $product['id'] }}"
                    data-sku="{{ $product['sku'] }}"
                    data-name="{{ $product['name'] }}"
                    data-toggle="modal" data-target="#deleteModal"
                    ><i class="fa fa-trash"></i>Delete</a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</section>

@include('products.create')
@include('products.update')
@include('products.delete')
@include('products.script')

@endsection
