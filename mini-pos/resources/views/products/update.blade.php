
<div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="#" id="edit-product-form">
              @csrf
              @method('PATCH')
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="sku" class="col-sm-5 col-form-label">Kode Barang</label>
                            <div class="col-sm-7">
                              <input type="text" name="_sku" class="form-control @error('_sku') is-invalid @enderror" id="edit-product-sku" placeholder="Kode Barang" value="">
                              @error('_sku')
                              <div class="text-danger mt-2">
                                  {{$message}}
                              </div>
                              @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-5 col-form-label">Nama Barang</label>
                            <div class="col-sm-7">
                              <input type="text" name="_name" class="form-control @error('_name') is-invalid @enderror" id="edit-product-name" placeholder="Nama Barang" value="">
                              @error('_name')
                              <div class="text-danger mt-2">
                                  {{$message}}
                              </div>
                              @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-5 col-form-label">Kategori</label>
                            <div class="col-sm-7">
                                <select class="custom-select" name="_category" id="edit-product-category" value="">
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
                                    <input type="text" name="_price" class="form-control @error('_price') is-invalid @enderror"" id="edit-product-price" value="">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                    @error('_price')
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
                                    <input type="text" name="_cost" class="form-control @error('_cost') is-invalid @enderror"" id="edit-product-cost" value="">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                    @error('_cost')
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
                <br><p><b>Catatan :</b><br>
                  1. Kode Barang adalah SKU<br>
                  2. Keuntungan adalah harga jual dikurangi harga beli</p>
  
                </div>
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal Update</button>
          <button type="submit" value="update" class="btn btn-dark">Update Barang</button>
        </div>
      </form>
      </div>
    </div>
</div>