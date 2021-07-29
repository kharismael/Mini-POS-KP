
@extends('layout.layout')

@section('judul','Daftar Barang')


@section('main_content')
<section class="content">
<div class="container-fluid">
    <div class="container mb-4 mt-2">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> Tambah Barang</button>
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
            <tr>
                <td>1</td>
                <td>KMJBIRU-L</td>
                <td>Kemeja Biru Size-L</td>
                <td>Kemeja</td>
                <td>0</td>
                <td>120.000</td>
                <td><span class="badge badge-success">10.000</span></td>
                <td>
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-paint-brush"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>KMJBIRU-M</td>
                <td>Kemeja Biru Size-M</td>
                <td>Kemeja</td>
                <td>0</td>
                <td>110.000</td>
                <td><span class="badge badge-success">10.000</span></td>
                <td>
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-paint-brush"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>KMJBIRU-S</td>
                <td>Kemeja Biru Size-S</td>
                <td>Kemeja</td>
                <td>0</td>
                <td>100.000</td>
                <td><span class="badge badge-success">10.000</span></td>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="input_kode" class="col-sm-4 col-form-label">Kode Barang</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="input_kode" placeholder="Kode Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input_nama" class="col-sm-4 col-form-label">Nama Barang</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="input_nama" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input_kategori" class="col-sm-4 col-form-label">Kategori</label>
                            <div class="col-sm-7">
                                <select class="custom-select">
                                    <option>Sembako</option>
                                    <option>Snack</option>
                                    <option>Minuman</option>
                                    <option>Rokok</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input_tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="input_hargajual" class="col-sm-4 col-form-label">Harga Jual</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input_hargabeli" class="col-sm-4 col-form-label">Harga Beli</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="show_profit" class="col-sm-4 col-form-label">Keuntungan</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" disabled="">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal Tambahkan</button>
          <button type="button" class="btn btn-primary">Tambah Barang</button>
        </div>
      </div>
    </div>
</div>

<!-- modal delete barang -->


@endsection

