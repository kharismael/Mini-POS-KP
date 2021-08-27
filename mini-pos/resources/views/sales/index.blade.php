
@extends('layout.layout')

@section('judul','Penjualan')


@section('main_content')
<section class="content">
<div class="container-fluid">
  
    <div class="container mt-1">
      <form action="{{route('createSales')}}" method="post">
        @csrf
        <div class="card-body">
        <div class="row">
            <div class="col">
              <div class="form-group row">
                <label for="input_kategori" class="col-sm-4 col-form-label">Pilih Customer</label>
                <div class="col-sm-7">
                    <select class="custom-select" name="customer_id">
                      <option value="">Pilih Customer</option>
                      @foreach ($customer as $cust)
                        <option value="{{$cust->id}}">{{$cust->name}}</option>
                      @endforeach
                      </select>
                    @error('customer_id')
                      <div class="text-danger mt-2">
                          {{$message}}
                      </div>
                    @enderror
                </div>
              </div>
            </div>
            <div class="col">
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
            <div class="from-group row">
            <button type="submit" class="btn btn-primary">Lanjut</button>
          </div>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@include('sales.script')
