<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Daftar Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('customer.store')}}">
            @csrf
              <div class="modal-body">
                <div class="card-body"> 
                      <div class="form-row">
                          <div class="form-group col-md-8">
                            <label for="cust_name">Nama Customer</label>
                            <input type="text" class="form-control" id="cust_name" name="name" value="{{ old('name') }}" placeholder="Nama Customer">
                            @error('name')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror
                          </div>
                          <div class="form-group col-md-4">
                            <label for="cust_no">No. Telepon</label>
                            <input type="tel" class="form-control" id="cust_no" name="telp" value="{{ old('telp') }}" placeholder="No. Telepon">
                            @error('telp')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-8">
                            <label for="cust_address">Alamat</label>
                            <input type="text" class="form-control" id="cust_address" name="address" value="{{ old('address') }}" placeholder="Alamat">
                            @error('address')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                          </div>
                          <div class="form-group col-md-4">
                            <label for="cust_no">Email</label>
                            <input type="email" class="form-control" id="cust_email" name="email" value="{{ old('email') }}" placeholder="Email">
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
                              <select class="form-control selectpicker" id="province_id" data-live-search="true">
                                <option value="" selected>Choose Province</option>
                                @foreach ($province as $prov)
                                  <option value="{{$prov->id}}">{{$prov->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          <div class="form-group col-md-4" id="regency">
                            <label for="cust_kec">Kota/kabupaten</label>
                            <select class="form-control selectpicker" id="regency_id" data-live-search="true">
                              <option value="" selected>Choose Regency</option>
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                              <label for="cust_kota">Kecamatan</label>
                              <select class="form-control selectpicker" id="district_id" data-live-search="true">
                                <option value="" selected>Choose District</option>
                              </select>
                            </div>
                        </div>
                            <div class="form-group col-md-4">
                              <label for="cust_prov">Desa</label>
                              <select class="form-control selectpicker" id="village_id" name="village_id" data-live-search="true">
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
            <button type="submit" class="btn btn-dark">Tambah Customer</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>