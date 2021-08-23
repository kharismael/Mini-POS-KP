
@extends('layout.layout')

@section('judul','Supplier')


@section('main_content')
<section class="content">
<div class="container-fluid">
    <div class="container mb-4 mt-2">
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> Tambah Daftar Supplier</button>
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
        <tbody>
          @foreach ($suppliers as $supplier)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$supplier->supplier_name}}</td>
                <td>{{$supplier->telp}}</td>
                <td>{{$supplier->address}}, {{$supplier->village_name}}, {{$supplier->district_name}}, {{$supplier->regency_name}}, Prov. {{$supplier->province_name}}</td>
                <td>
                    <button 
                      type="button" 
                      class="btn btn-warning btn-sm btn-edit" 
                      data-toggle="modal" 
                      data-target="#UpdateModalCenter"
                      data-supplier_id="{{ $supplier->id}}"
                      data-supplier_name="{{ $supplier->supplier_name}}"
                      data-supplier_telp="{{ $supplier->telp}}"
                      data-supplier_address="{{ $supplier->address}}"
                      data-village_name="{{ $supplier->village_name}}"
                      data-village_id="{{ $supplier->village_id}}"
                      data-district_name="{{ $supplier->district_name}}"
                      data-district_id="{{ $supplier->district_id}}"
                      data-regency_name="{{ $supplier->regency_name}}"
                      data-regency_id="{{ $supplier->regency_id}}"
                      data-province_name="{{ $supplier->province_name}}"
                      data-province_id="{{ $supplier->province_id}}"
                      ><i class="fa fa-paint-brush"></i></button>
                    <form action="/supplier/{{$supplier->id}}" method="post">
                      @method("delete")
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Daftar Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('createSupplier')}}" method="post">
          @csrf
            <div class="modal-body">
              <div class="card-body"> 
                    <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="sup_name">Nama Supplier</label>
                          <input type="text" value="{{ old('name') }}" class="form-control" id="sup_name" name="name" placeholder="Nama Supplier">
                          @error('name')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
                        <div class="form-group col-md-4">
                          <label for="sup_no">No. Telepon</label>
                          <input type="text" value="{{ old('telp') }}" class="form-control" id="sup_no" name="telp" placeholder="No. Telepon">
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
                          <input type="text" value="{{ old('address') }}" class="form-control" id="sup_addres" name="address" placeholder="Alamat">
                          @error('address')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
                        <div class="form-group col-md-4">
                          <label for="sup_desa">Provinsi</label>
                          <select class="form-control selectpicker" name="province_id" id="province_id" data-live-search="true">
                            <option value="" selected>Choose Province</option>
                            @foreach ($provinsi as $item)
                              <option value="{{$item->id}}" {{ old('province_id')== $item->id ? 'selected' : null}}>{{$item->name}}</option>
                            @endforeach
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4" id="regency">
                          <label for="sup_kec">Kota/kabupaten</label>
                          <select class="form-control selectpicker" id="regency_id" data-live-search="true">
                            <option value="" selected>Choose Regency</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sup_kota">Kecamatan</label>
                            <select class="form-control selectpicker" id="district_id" data-live-search="true">
                              <option value="" selected>Choose District</option>
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="sup_prov">Desa</label>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-dark">Tambah Supplier</button>
        </div>
      </form>
      </div>
    </div>
</div>
<!-- modal delete barang -->

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

<!-- modal Update Supplier -->
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#province_id').change(function () {
                var $regency = $('#regency_id');
                $.ajax({
                    url: "{{ route('getRegency') }}",
                    data: {
                        province_id: $(this).val()
                    },
                    success: function (data) {
                        $regency.html('<option value="" selected>Choose Regency</option>');
                        $.each(data, function (id, value) {
                            $regency.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
            });
            $('#regency_id').change(function () {
                var $district = $('#district_id');
                $.ajax({
                    url: "{{ route('getDistrict') }}",
                    data: {
                        regency_id: $(this).val()
                    },
                    success: function (data) {
                        $district.html('<option value="" selected>Choose District</option>');
                        $.each(data, function (id, value) {
                            $district.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
            });
            $('#district_id').change(function () {
                var $village = $('#village_id');
                $.ajax({
                    url: "{{ route('getVillage') }}",
                    data: {
                        district_id: $(this).val()
                    },
                    success: function (data) {
                        $village.html('<option value="" selected>Choose Village</option>');
                        $.each(data, function (id, value) {
                            $village.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    <script>
      $('.btn-edit').click(function(){
        $('#edit-supplier-form').attr('action','{{route('updateSupplier','')}}/'+ $(this).data('supplier_id'))
        $('#edit-supplier-name').val($(this).data('supplier_name'))
        $('#edit-supplier-telp').val($(this).data('supplier_telp'))
        $('#edit-supplier-address').val($(this).data('supplier_address'))
      })
    </script>

<script>
  $(document).ready(function () {
      $('#update_province_id').change(function () {
          var $regency = $('#update_regency_id');
          $.ajax({
              url: "{{ route('getRegency') }}",
              data: {
                  province_id: $(this).val()
              },
              success: function (data) {
                  $regency.html('<option value="" selected>Choose Regency</option>');
                  $.each(data, function (id, value) {
                      $regency.append('<option value="' + id + '">' + value + '</option>');
                  });
              }
          });
      });
      $('#update_regency_id').change(function () {
          var $district = $('#update_district_id');
          $.ajax({
              url: "{{ route('getDistrict') }}",
              data: {
                  regency_id: $(this).val()
              },
              success: function (data) {
                  $district.html('<option value="" selected>Choose District</option>');
                  $.each(data, function (id, value) {
                      $district.append('<option value="' + id + '">' + value + '</option>');
                  });
              }
          });
      });
      $('#update_district_id').change(function () {
          var $village = $('#update_village_id');
          $.ajax({
              url: "{{ route('getVillage') }}",
              data: {
                  district_id: $(this).val()
              },
              success: function (data) {
                  $village.html('<option value="" selected>Choose Village</option>');
                  $.each(data, function (id, value) {
                      $village.append('<option value="' + id + '">' + value + '</option>');
                  });
              }
          });
      });
  });
</script>
@endsection