@extends('layout.layout')

@section('judul','Dashboard')

@section('preloader')
    @include('layout.preloader')
@endsection

@section('main_content')
<section class="content">
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box">
            <div class="inner">
            <h3><sup style="font-size: 20px">Rp</sup> 310.000</h3>
            <p>Penjualan Hari Ini</p>
            </div>
            <div class="icon cl-custom-1">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/penjualan" class="small-box-footer bg-custom">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box">
            <div class="inner">
            <h3><sup style="font-size: 20px">Rp</sup> 12.200.000</h3>
            <p>Total Penjualan</p>
            </div>
            <div class="icon cl-custom-2">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/penjualan" class="small-box-footer bg-custom">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box">
            <div class="inner">
            <h3>150</h3>
            <p>Penjualan Baru</p>
            </div>
            <div class="icon cl-custom-3">
            <i class="ion ion-bag"></i>
            </div>
            <a href="/penjualan" class="small-box-footer bg-custom">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box">
            <div class="inner">
            <h3>65</h3>

            <p>Outlet</p>
            </div>
            <div class="icon cl-custom-4">
                <i class="ion ion-location"></i>
            </div>
            <a href="/outlet" class="small-box-footer bg-custom">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box">
            <div class="inner">
            <h3>65</h3>

            <p>Supplier</p>
            </div>
            <div class="icon cl-custom-2">
                <i class="ion ion-arrow-down-a"></i>
            </div>
            <a href="/supplier" class="small-box-footer bg-custom">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box">
            <div class="inner">
            <h3>65</h3>

            <p>Stock Barang</p>
            </div>
            <div class="icon cl-custom-3">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="/barang" class="small-box-footer bg-custom">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->

    </div>
</div>
</section>
<script>
    $('.tablebarang').DataTable();
  </script>
@endsection
