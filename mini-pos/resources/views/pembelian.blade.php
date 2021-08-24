
@extends('layout.layout')

@section('judul','Pembelian')


@section('main_content')
<section class="content">
<div class="container-fluid">
  
    <div class="container mt-1">
      <form action="{{route('createPurchases')}}" method="post">
        @csrf
        <div class="card-body">
        <div class="row">
            <div class="col">
              <div class="form-group row">
                <label for="input_kategori" class="col-sm-4 col-form-label">Pilih Supplier</label>
                <div class="col-sm-7">
                    <select class="custom-select" name="supplier_id">
                      <option value="">Pilih supplier</option>
                      @foreach ($suppliers as $supplier)
                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                      @endforeach
                      </select>
                    @error('supplier_id')
                      <div class="text-danger mt-2">
                          {{$message}}
                      </div>
                    @enderror
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group row">
                <label for="input_nama" class="col-sm-4 col-form-label">No. Invoice</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="input_nama" name="invoice" placeholder="No. Invoice">
                </div>
              @error('invoice')
                <div class="text-danger mt-2">
                    {{$message}}
                </div>
              @enderror
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="from-group row">
              <label for="date" class="col-sm-4 col-form-label" id="tanggal">Tanggal </label>
              <div class="col-sm-7">
                <input type="text" class="pick-date" name="date" value="" />
              </div>
            @error('date')
              <div class="text-danger mt-2">
                  {{$message}}
              </div>
            @enderror
            </div>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary">Lanjut</button>
          </div>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
  $('input[class="pick-date"]').daterangepicker({
      "singleDatePicker": true,
  });
</script>
@endsection

