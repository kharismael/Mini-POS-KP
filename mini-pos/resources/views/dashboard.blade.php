@extends('layout.layout')

@section('judul','Dashboard')


@section('main_content')
<section class="content">
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3><sup style="font-size: 20px">Rp</sup> 5.000.000</h3>
            <p>Penjualan Hari Ini</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/penjualan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
            <h3><sup style="font-size: 20px">Rp</sup> 15.000.000</h3>
            <p>Total Penjualan</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/penjualan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>150</h3>
            <p>Penjualan Baru</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="/penjualan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>65</h3>

            <p>Outlet</p>
            </div>
            <div class="icon">
            <i class="ion ion-location"></i>
            </div>
            <a href="/outlet" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
            <div class="inner">
            <h3>65</h3>

            <p>Supplier</p>
            </div>
            <div class="icon">
            <i class="ion ion-arrow-down-a"></i>
            </div>
            <a href="/supplier" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>65</h3>

            <p>Stock Barang</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="/stock" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
