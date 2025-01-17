@php
use App\Enums\PermissionLevel;
@endphp
 
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Invoice-App</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('menuDash')">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @if(@auth()->user()->permission_level->value != PermissionLevel::USER)
    <li class="nav-item @yield('menuUsers')">
        <a class="nav-link" href="{{ url('/dashboard/users') }}">
            <i class="fas fa-fw fa-solid fa-users"></i>
            <span>Pengguna</span></a>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <i class="fas fa-fw fa-folder"></i>
        Pages
    </div>

    <li class="nav-item @yield('menuInvent')">
        <a class="nav-link " href="{{ url('/dashboard/inventaris') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Inventaris</span></a>
    </li>

    <li class="nav-item @yield('menuMasuk')">
        <a class="nav-link" href="{{ url('/dashboard/anggaran') }}">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Anggaran</span></a>
    </li>

    <li class="nav-item @yield('menuInvoice')">
        <a class="nav-link" href="{{ route('index.invoice') }}">
            <i class="fas fa-fw fa-receipt"></i>
            <span>Invoice</span></a>
    </li>

    <li class="nav-item @yield('geminiAI')">
        <a class="nav-link" href="{{ route('gemini') }}">
            <i class="fas fa-fw fa-atom"></i>
            <span>AI Analysis</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->