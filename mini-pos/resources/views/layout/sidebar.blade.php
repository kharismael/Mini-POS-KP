  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-custom">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{asset('template')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Mini<b>POS</b> KP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg-custom">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-header">TRANSAKSI</li>
          <li class="nav-item">
            <a href="/pembelian" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Pembelian
                <span class="badge badge-danger right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/penjualan" class="nav-link">
              <i class="nav-icon fas fa-percent"></i>
              <p>
                Penjualan
              </p>
            </a>
          </li>

          <li class="nav-header">MITRA</li>
          <li class="nav-item">
            <a href="/outlet" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Outlet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/supplier" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Supplier
              </p>
            </a>
          </li>

          <li class="nav-header">GUDANG</li>
          <li class="nav-item">
            <a href="/barang" class="nav-link">
              <i class="nav-icon fas fa-dolly"></i>
              <p>
                Barang
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/mutasi" class="nav-link">
              <i class="nav-icon fas fa-clipboard-check"></i>
              <p>
                Mutasi
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
