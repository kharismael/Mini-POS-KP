@extends('layout.layout')

@section('judul','Customer')

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
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> Tambah Daftar Customer</button>
    </div>
    <div class="container mb-1 mt-1">
    <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
 
        <tbody>
             @foreach($customer as $cust)      
            <tr>
                <th scopes="row">{{ $loop->iteration}}</th>
                <td>{{ $cust->name }}</td>
                <td>{{ $cust->telp }}</td>
                <td>{{ $cust->address }}, {{$cust->village_name}}, {{$cust->district_name}}, {{$cust->regency_name}}, Prov. {{$cust->province_name}}</td>
                <td>{{ $cust->email }}</td>
                <td>
                    <a type="button" class="btn btn-warning btn-sm btn-edit"
                    data-cust_id="{{ $cust->id}}"
                    data-cust_name="{{ $cust->name}}"
                    data-cust_telp="{{ $cust->telp}}"
                    data-cust_address="{{ $cust->address}}"
                    data-village_name="{{ $cust->village_name}}"
                    data-village_id="{{ $cust->village_id}}"
                    data-district_name="{{ $cust->district_name}}"
                    data-district_id="{{ $cust->district_id}}"
                    data-regency_name="{{ $cust->regency_name}}"
                    data-regency_id="{{ $cust->regency_id}}"
                    data-province_name="{{ $cust->province_name}}"
                    data-province_id="{{ $cust->province_id}}"
                    data-cust_email="{{ $cust->email}}"
                    data-toggle="modal" data-target="#modal-update"
                    ><i class="fa fa-paint-brush"></i> Edit</a>

                    <a href="#" type="button" class="btn btn-danger btn-sm btn-delete"
                    data-id="{{ $cust->id }}"
                    data-name="{{ $cust->name }}"
                    data-toggle="modal" data-target="#deleteCust"
                    ><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</section>

{{-- CRUD Customer --}}
@include('customer.delete')
@include('customer.create')
@include('customer.update')
@include('customer.scripts')
@endsection


