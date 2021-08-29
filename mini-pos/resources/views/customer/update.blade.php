<div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Data Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="#" id="edit-cust-form">
            @csrf
            @method('PATCH')
              <div class="modal-body">
                <div class="card-body"> 
                      <div class="form-row">
                          <div class="form-group col-md-8">
                            <label for="cust_name">Nama Customer</label>
                            <input type="text" class="form-control" id="edit-cust-name" name="name" value="{{ old('name') }}" placeholder="Nama Customer">
                            @error('name')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror
                          </div>
                          <div class="form-group col-md-4">
                            <label for="cust_no">No. Telepon</label>
                            <input type="tel" class="form-control" id="edit-cust-telp" name="telp" value="{{ old('telp') }}" placeholder="No. Telepon">
                            @error('telp')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-8">
                            <label for="edit-cust-address">Alamat</label>
                            <input type="text" class="form-control" id="edit-cust-address" name="address" value="{{ old('address') }}" placeholder="Alamat">
                            @error('address')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                          </div>
                          <div class="form-group col-md-4">
                            <label for="cust_no">Email</label>
                            <input type="email" class="form-control" id="edit-cust-email" name="email" value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="cust_prov">Provinsi</label>
                              <select class="form-control" name="province_id" id="update-data-prov" data-live-search="true">
                                @foreach ($province as $prov)
                                  <option 
                                        value="{{$prov->id}}">
                                    {{$prov->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          <div class="form-group col-md-4" id="regency">
                            <label for="cust_kec">Kota/kabupaten</label>
                            <select class="form-control selectpicker" id="update-data-regency" data-live-search="true">
                              <option value="" selected>Choose Regency</option>
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                              <label for="cust_kota">Kecamatan</label>
                              <select class="form-control selectpicker" id="update-data-district" data-live-search="true">
                                <option value="" selected>Choose District</option>
                              </select>
                            </div>
                        </div>
                            <div class="form-group col-md-4">
                              <label for="cust_prov">Desa</label>
                              <select class="form-control selectpicker" id="update-data-village" name="village_id" data-live-search="true">
                                <option value="" selected>Choose Village</option>
                              </select>
                              @error('village_id')
                              <div class="text-danger mt-2">
                                  {{$message}}
                              </div>
                          @enderror
                          </div>
                    </div>
                </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-dark">Update Customer</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
