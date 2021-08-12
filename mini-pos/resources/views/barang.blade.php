
@extends('layout.layout')

@section('judul','Daftar Barang')


@section('main_content')
<section class="content">
<div class="container-fluid">
    <div class="container mb-4 mt-2">
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> Tambah Barang</button>
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
                <td>{{ $product->sku }}-L</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category }}</td>
                <td>0</td>
                <td>Rp. {{ $product->price }}</td>
                <td><span class="badge badge-success"> Rp.{{ $product->price - $product->cost }}</span></td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-paint-brush"></i></button>
                    <button type="button" class="btn btn-danger btn-sm btn-delete"
                      data-id="{{ $product['id'] }}"
                      data-name="{{ $product['name'] }}"
                      data-toggle="modal"
                      data-target="#deleteModal">  
                    <i class="fa fa-trash"></i></button>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('createProduct')}}">
              @csrf
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="sku" class="col-sm-4 col-form-label">Kode Barang</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="sku" placeholder="Kode Barang" name="sku">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Nama Barang</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="name" placeholder="Nama Barang" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-4 col-form-label">Kategori</label>
                            <div class="col-sm-7">
                                <select class="custom-select" id="category" name="category">
                                    <option>Sembako</option>
                                    <option>Snack</option>
                                    <option>Minuman</option>
                                    <option>Rokok</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="price" class="col-sm-4 col-form-label">Harga Jual</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" id="price" name="price">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cost" class="col-sm-4 col-form-label">Harga Beli</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" id="cost" name="cost">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal Tambahkan</button>
          <button type="submit" class="btn btn-dark">Tambah Barang</button>
        </div>
      </form>
      </div>
    </div>
</div>

<!-- modal delete barang -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" id="delete-product-form" method="post">
        <div class="modal-body">
                @method('delete')
                @csrf
                <span class="text-center">Yakin Menghapus Data?</span>
        </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-dark">Hapus Barang</button>
        </div>
    </form>
    </div>
  </div>
</div>
@endsection


@section('scripts')
  <script>
    $('.btn-delete').click(function()){
        $('#delete-product-form').attr('action', '{{ route('deleteProduct','1')}}/' + $(self).data('id'))
        //$('#delete-product-name').val($(self).data('name'))
    })
  </script>
@endsection



