
@extends('layout.layout')

@section('judul','Pembelian')


@section('main_content')
<section class="content">
<div class="container-fluid">
  
    <div class="container mt-1">
      <form action="{{route('createPurchases')}}" method="POST">
        @csrf
        <div class="card-body">
        <div class="row">
            <div class="col">
              <div class="form-group row">
                <label for="input_kategori" class="col-sm-4 col-form-label">Pilih Supplier</label>
                <div class="col-sm-7">
                    <select class="custom-select" name="supplier_id">
                      <option value="">Pilih supplier</option>
                      @foreach ($suppliers as $supplier)
                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                      @endforeach
                      </select>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group row">
                <label for="input_nama" class="col-sm-4 col-form-label">No. Invoice</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="input_nama" name="invoice" placeholder="No. Invoice">
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="from-group row">
              <label for="date" class="col-sm-4 col-form-label" id="tanggal">Tanggal </label>
              <div class="col-sm-7">
                <input type="text" name="pick-date" value="" />
              </div>
            </div>
          </div>
          <div class="col">
          </div>
        </div>
        </div>

        <div class="container mb-1 mt-4">
          <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Harga Jual</th>
                      <th>QTY</th>
                      <th>Sub Total</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->category}}</td>
                      <td><input type="text" class="form-control" id="cost" value="{{$product->price}}"></td>
                      <td><input type="text" class="form-control" id="quantity" value="1"></td>
                      <td>Sek pake js</td>
                      <td>
                          <button type="button" class="btn btn-warning btn-sm">tambah keranjang</button>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
          Keranjang
          <div class="container mb-1 mt-4">
            <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga Jual</th>
                        <th>QTY</th>
                        <th>Sub Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th></th>                
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>Total</th>
                      <th>280.000</th>
                      <th></th>
                  </tr>
              </tfoot>
                <tbody>
                    <tr>
                        <td>pake js</td>
                        <td>pake js</td>
                        <td>pake js</td>
                        <td>pake js</td>
                        <td>pake js</td>
                        <td>Sek pake js</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn btn-dark">Tambah Pembelian</button>
      </form>

    </div>
  </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
  $('input[name="pick-date"]').daterangepicker({
      "singleDatePicker": true,
  });
</script>
@endsection

