<!-- modal Update Supplier -->
<div class="modal fade" id="UpdateModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Daftar Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" method="post" id="edit-supplier-form">
          @csrf
          @method('put')
            <div class="modal-body">
              <div class="card-body"> 
                    <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="sup_name">Nama Supplier</label>
                          <input type="text" value="" class="form-control" id="edit-supplier-name" name="name" placeholder="Nama Supplier">
                          @error('name')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
                        <div class="form-group col-md-4">
                          <label for="sup_no">No. Telepon</label>
                          <input type="text" value="" class="form-control" id="edit-supplier-telp" name="telp" placeholder="No. Telepon">
                          @error('telp')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="sup_addres">Alamat</label>
                          <input type="text" value="" class="form-control" id="edit-supplier-address" name="address" placeholder="Alamat">
                          @error('address')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
                        <div class="form-group col-md-4">
                          <label for="sup_desa">Provinsi</label>
                          <select class="form-control selectpicker" id="update_province_id" data-live-search="true">
                            <option value="" selected>Choose Province</option>
                            @foreach ($provinsi as $item)
                              <option value="{{$item->id}}" >{{$item->name}}</option>
                            @endforeach
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="sup_kec">Kota/kabupaten</label>
                          <select class="form-control selectpicker" id="update_regency_id" data-live-search="true">
                            <option value="" selected>Choose Regency</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sup_kota">Kecamatan</label>
                            <select class="form-control selectpicker" id="update_district_id" data-live-search="true">
                              <option value="" selected>Choose District</option>
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="sup_prov">Desa</label>
                            <select class="form-control selectpicker" id="update_village_id" name="village_id" data-live-search="true">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-dark">Update</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  