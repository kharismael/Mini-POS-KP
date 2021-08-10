@extends('layout.layout')

@section('judul','Supplier')


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
                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-paint-brush"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    </div>
</div>
</section>

<!-- modal tambah barang -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Daftar Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="card-body"> 
                    <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="sup_name">Nama Supplier</label>
                          <input type="text" class="form-control" id="sup_name" placeholder="Nama Supplier">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="sup_no">No. Telepon</label>
                          <input type="text" class="form-control" id="sup_no" placeholder="No. Telepon">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="sup_addres">Alamat</label>
                          <input type="text" class="form-control" id="sup_addres" placeholder="Alamat">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="sup_desa">Provinsi</label>
                          <select class="form-control selectpicker" id="select-country" data-live-search="true">
                            <option data-tokens="Jawa Timur">Jawa Timur</option>
                            <option data-tokens="Jawa Barat">Jawa Barat</option>
                            <option data-tokens="Jawa Tengah">Jawa Tengah</option>
                            <option data-tokens="DKI Jakarta">DKI Jakarta</option>
                            <option data-tokens="Banten">Banten</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="sup_kec">Kota/kabupaten</label>
                          <select class="form-control selectpicker" id="select-country" data-live-search="true">
                            <option data-tokens="Jawa Timur">Jawa Timur</option>
                            <option data-tokens="Jawa Barat">Jawa Barat</option>
                            <option data-tokens="Jawa Tengah">Jawa Tengah</option>
                            <option data-tokens="DKI Jakarta">DKI Jakarta</option>
                            <option data-tokens="Banten">Banten</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sup_kota">Kecamatan</label>
                            <select class="form-control selectpicker" id="select-country" data-live-search="true">
                              <option data-tokens="Jawa Timur">Jawa Timur</option>
                              <option data-tokens="Jawa Barat">Jawa Barat</option>
                              <option data-tokens="Jawa Tengah">Jawa Tengah</option>
                              <option data-tokens="DKI Jakarta">DKI Jakarta</option>
                              <option data-tokens="Banten">Banten</option>
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="sup_prov">Desa</label>
                            <select class="form-control selectpicker" id="select-country" data-live-search="true">
                              <option data-tokens="Jawa Timur">Jawa Timur</option>
                              <option data-tokens="Jawa Barat">Jawa Barat</option>
                              <option data-tokens="Jawa Tengah">Jawa Tengah</option>
                              <option data-tokens="DKI Jakarta">DKI Jakarta</option>
                              <option data-tokens="Banten">Banten</option>
                            </select>
                          </div>
                      </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-dark">Tambah Supplier</button>
        </div>
      </div>
    </div>
</div>

<!-- modal delete barang -->


@endsection

