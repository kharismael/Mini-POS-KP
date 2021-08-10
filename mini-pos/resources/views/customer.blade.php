
@extends('layout.layout')

@section('judul','Customer')


@section('main_content')
<section class="content">
<div class="container-fluid">
    <div class="container mb-4 mt-2">
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> Tambah Daftar Customer</button>
    </div>
    <div class="container mb-1 mt-1">
    <table class="table table-striped table-bordered tablebarang" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
 
        <tbody>
             @foreach($customer as $cust)      
            <tr>
                <th scopes="row">{{ $loop->iteration}}</th>
                <td>{{ $cust->name }}</td>
                <td>{{ $cust->telp }}</td>
                <td>{{ $cust->address }}, {{$cust->village_name}}, {{$cust->district_name}}, {{$cust->regency_name}}, Prov. {{$cust->province_name}}</td>
                <td>{{ $cust->email }}</td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-paint-brush"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Daftar Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('createCustomer')}}" method="post">
            @csrf
              <div class="modal-body">
                <div class="card-body"> 
                      <div class="form-row">
                          <div class="form-group col-md-8">
                            <label for="cust_name">Nama Customer</label>
                            <input type="text" class="form-control" id="cust_name" name="name" placeholder="Nama Customer">
                            @error('name')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror
                          </div>
                          <div class="form-group col-md-4">
                            <label for="cust_no">No. Telepon</label>
                            <input type="text" class="form-control" id="cust_no" name="telp" placeholder="No. Telepon">
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
                            <input type="text" class="form-control" id="cust_address" name="address" placeholder="Alamat">
                            @error('address')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                          </div>
                          <div class="form-group col-md-4">
                            <label for="cust_desa">Provinsi</label>
                            <select class="form-control selectpicker" id="province_id" data-live-search="true">
                              <option value="" selected>Choose Province</option>
                              @foreach ($province as $prov)
                                <option value="{{$prov->id}}">{{$prov->name}}</option>
                              @endforeach
                              
                            </select>
                          </div>
                        </div>
                        <div class="form-row">
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
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-dark">Tambah Customer</button>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-dark">Tambah Outlet</button>
        </div>
      </div>
    </div>
</div>

<!-- modal delete barang -->

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
@endsection

