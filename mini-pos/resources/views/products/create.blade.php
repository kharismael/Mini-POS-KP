
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('products.store')}}">
              @csrf
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group row needs-validation">
                            <label for="sku" class="col-sm-5 col-form-label">Kode Barang</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" placeholder="Kode Barang" name="sku"
                              value="{{old('sku')}}">
                              @error('sku')
                              <div class="text-danger mt-2">
                                  {{$message}}
                              </div>
                              @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-5 col-form-label">Nama Barang</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Barang" name="name"
                              value="{{old('name')}}">
                              @error('name')
                              <div class="text-danger mt-2">
                                  {{$message}}
                              </div>
                              @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-5 col-form-label">Kategori</label>
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
                                    <input type="text" class="profit-count form-control @error('price') is-invalid @enderror" id="price" name="price"
                                    value="{{old('price')}}">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                    @error('price')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
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
                                    <input type="text" class="profit-count form-control @error('cost') is-invalid @enderror" id="cost" name="cost"
                                    value="{{old('cost')}}">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                    @error('cost')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="show_profit" class="col-sm-4 col-form-label">Keuntungan</label>
                            <div class="col-sm-7">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" id="profit_show" class="form-control" disabled="">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><p><b>Catatan :</b><br>
                1. Kode Barang adalah SKU<br>
                2. Keuntungan adalah harga jual dikurangi harga beli</p>
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