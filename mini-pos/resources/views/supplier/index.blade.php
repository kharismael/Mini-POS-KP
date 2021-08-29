@extends('layout.layout')

@section('judul','Supplier')

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
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> Tambah Daftar Supplier</button>
    </div>
    <div class="container mb-1 mt-1">
    <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Supplier</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($suppliers as $supplier)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$supplier->supplier_name}}</td>
                <td>{{$supplier->telp}}</td>
                <td>{{$supplier->address}}, {{$supplier->village_name}}, {{$supplier->district_name}}, {{$supplier->regency_name}}, Prov. {{$supplier->province_name}}</td>
                <td>
                    <a href="#" type="button" class="btn btn-warning btn-sm btn-edit"
                      data-supplier_id="{{ $supplier->id}}"
                      data-supplier_name="{{ $supplier->supplier_name}}"
                      data-supplier_telp="{{ $supplier->telp}}"
                      data-supplier_address="{{ $supplier->address}}"
                      data-village_name="{{ $supplier->village_name}}"
                      data-village_id="{{ $supplier->village_id}}"
                      data-district_name="{{ $supplier->district_name}}"
                      data-district_id="{{ $supplier->district_id}}"
                      data-regency_name="{{ $supplier->regency_name}}"
                      data-regency_id="{{ $supplier->regency_id}}"
                      data-province_name="{{ $supplier->province_name}}"
                      data-province_id="{{ $supplier->province_id}}"
                      data-toggle="modal" data-target="#UpdateModalCenter"
                      ><i class="fa fa-paint-brush"></i> Edit</a>

                    <a href="#" type="button" class="btn btn-danger btn-sm btn-delete"
                      data-id="{{ $supplier->id }}"
                      data-name="{{ $supplier->supplier_name }}"
                      data-toggle="modal" data-target="#deleteSup"
                    ><i class="fa fa-trash"></i> Delete</a>
                    </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    </div>
</div>
</section>


<!-- modal delete barang -->


{{-- CRUD Supplier --}}
@include('supplier.create')
@include('supplier.update')
@include('supplier.delete')
@include('supplier.script')
@endsection
