
@extends('layout.layout')

@section('judul','Pembelian')


@section('main_content')
<section class="content">
<div class="container-fluid">
  
    <div class="container mt-1">
        <div class="container mb-1 mt-4">
          <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Harga Beli</th>
                      <th>QTY</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->category}}</td>
                      <form action="/pembelian/{{$id}}/{{$product->id}}" method="post">
                        @csrf
                      <td><input type="text" class="form-control" id="cost" name="cost" value="{{$product->cost}}"></td>
                      <td><input type="text" class="form-control" id="quantity" name="quantity" value="1"></td>
                      <td>
                          <button type="submit" class="btn btn-warning btn-sm">tambah keranjang</button>
                      </td>
                    </form>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
          Keranjang
          <div class="container mb-1 mt-4">
            <table class="table table-striped table-bordered tablebarang" id="count-it" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga Beli</th>
                        <th>QTY</th>
                        <th>Sub Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot id="count-foot">
                </tfoot>
                <tbody>
                  @foreach ($purcprod as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['category']}}</td>
                        <td>{{$item['cost']}}</td>
                        <td>{{$item['quantity']}}</td>
                        <td class="count-me">{{$item['total']}}</td>
                        <td>
                          <form action="/pembelian/{{$id}}/{{$item['id']}}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                          </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-primary mb-4 mt-3 btn-finish"
        data-id="{{ $id }}"
        data-toggle="modal" data-target="#finishModal"
        >Finish</button>
        <button type="button" class="btn btn-danger mb-4 mt-3 btn-cancel"
        data-id="{{ $id }}"
        data-toggle="modal" data-target="#cancelModal"
        >Cancel</button>
    </div>
  </div>
</div>
@include('purchases.cancel')
@include('purchases.finish')
@include('purchases.script')
@endsection
