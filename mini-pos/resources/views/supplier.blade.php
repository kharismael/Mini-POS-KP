
@extends('layout.layout')

@section('judul','Supplier')


@section('main_content')
<section class="content">
<div class="container-fluid">
    <div class="container mb-4 mt-2">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> Tambah Daftar Supplier</button>
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
 
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Supplier</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
 
        <tbody>
            <tr>
                <td>1</td>
                <td>PT Sejahtera Abadi</td>
                <td>0821-8977-2223</td>
                <td>Jl.IR Soekarno 122, Kec.Baturaja, Kab.Jombang, Jawa Timur</td>
                <td>
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-paint-brush"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>PT Abadi Sejahtera</td>
                <td>0821-4977-2111</td>
                <td>Jl.Brawijaya 26, Kec.Pungging, Kab.Mojokerto, Jawa Timur</td>
                <td>
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-paint-brush"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
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
                          <label for="sup_desa">Desa/Dusun</label>
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
                          <label for="sup_kec">Kecamatan</label>
                          <select class="form-control selectpicker" id="select-country" data-live-search="true">
                            <option data-tokens="Jawa Timur">Jawa Timur</option>
                            <option data-tokens="Jawa Barat">Jawa Barat</option>
                            <option data-tokens="Jawa Tengah">Jawa Tengah</option>
                            <option data-tokens="DKI Jakarta">DKI Jakarta</option>
                            <option data-tokens="Banten">Banten</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sup_kota">Kota/Kabupaten</label>
                            <select class="form-control selectpicker" id="select-country" data-live-search="true">
                              <option data-tokens="Jawa Timur">Jawa Timur</option>
                              <option data-tokens="Jawa Barat">Jawa Barat</option>
                              <option data-tokens="Jawa Tengah">Jawa Tengah</option>
                              <option data-tokens="DKI Jakarta">DKI Jakarta</option>
                              <option data-tokens="Banten">Banten</option>
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="sup_prov">Provinsi</label>
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
          <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Tambah Supplier</button>
        </div>
      </div>
    </div>
</div>

<!-- modal delete barang -->


@endsection

