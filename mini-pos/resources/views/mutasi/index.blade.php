@extends('layout.layout')

@section('judul','Riwayat Mutasi')

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
                    <label for="input_kategori" class="col-sm-4 col-form-label">Pilih Mutasi</label>
                    <div class="col-sm-7">
                        <a class="btn btn-primary" href="/mutasi/sales" role="sales">Penjualan</a>
                        <a class="btn btn-primary" href="/mutasi/purchases" role="purchases">Pembelian</a>
                    </div>
                  </div>
                </div>
                <div class="col">
              </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection