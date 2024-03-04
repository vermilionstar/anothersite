 <!-- Sidebar Menu -->
 @if(Auth()->user()->level =='admin')
 <nav class="mt-2" >
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="/dashboard" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/cek" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Cek Data Member
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
          Menu Utama
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/user" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelola Data User</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/member" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelola Data Member</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/supplier" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelola Data Supplier</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/sepatu" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelola Data Sepatu</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/penjualan" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelola Data Penjualan</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
          Setting
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/profile" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/contact" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Contact</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/contactus" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Laporkan Keluhan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
@else
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="/dashboard" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a href="/cek" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Cek Data Member
        </p>
      </a>
    </li> --}}
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
          Menu Utama
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/penjualan" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelola Data Penjualan</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
          Setting
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        {{-- <li class="nav-item">
          <a href="/profile" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Profile</p>
          </a>
        </li> --}}
        <li class="nav-item">
          <a href="/l" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
@endif
<!-- /.sidebar-menu -->