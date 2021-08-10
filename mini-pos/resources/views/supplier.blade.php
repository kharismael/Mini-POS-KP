
@extends('layout.layout')

@section('judul','Supplier')


@section('main_content')
<section class="content">
<div class="container-fluid">
    <div class="container mb-4 mt-2">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> Tambah Daftar Supplier</button>
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
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Daftar Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('createSupplier')}}" method="post">
              @csrf
              <div class="card-body"> 
                    <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="sup_name">Nama Supplier</label>
                          <input type="text" class="form-control" id="sup_name" name="name" placeholder="Nama Supplier">
                          @error('name')
                          <div class="text-danger mt-2">
                              {{$message}}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group col-md-4">
                          <label for="sup_no">No. Telepon</label>
                          <input type="text" class="form-control" id="sup_no" name="telp" placeholder="No. Telepon">
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
                          <input type="text" class="form-control" id="sup_addres" name="address" placeholder="Alamat">
                          @error('address')
                          <div class="text-danger mt-2">
                              {{$message}}
                          </div>
                      @enderror
                        </div>
                        <div class="form-group col-md-4">
                          <label for="sup_desa">Provinsi</label>
                          <select class="form-control selectpicker" id="province_id" data-live-search="true">
                            <option value="" selected>Choose Province</option>
                            @foreach ($provinsi as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
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
                <button type="submit" class="btn btn-primary">Tambah Supplier</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah Supplier</button>
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