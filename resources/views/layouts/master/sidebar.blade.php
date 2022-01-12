<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sewa Mobil</div>
    </a>
    <hr class="sidebar-divider">
    <div class="sidebar-card d-none d-lg-flex">
        <p class="text-center mb-2"><strong>Selamat Datang!</strong></p>
        <a class="shadow-sm btn btn-success btn-sm" href="{{ url('transaksi') }}">Mulai Mendata!</a>
    </div>
    <hr class="sidebar-divider my-0">
    <li class="nav-item @yield('statusNavItemDashboard')">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Transaksi
    </div>
    <li class="nav-item @yield('statusNavItemPelaporan')">
        <a class="@yield('collapsedNavPelaporan') disabled text-secondary" href="#" data-toggle="collapse" data-target="#collapsePelaporan"
            aria-expanded="@yield('ariaExpanedNavPelaporan')" aria-controls="collapsePelaporan">
            <i class="fas fa-fw fa-file"></i>
            <span>Pelaporan</span>
        </a>
        <div id="collapsePelaporan" class="collapse @yield('collapseShowPelaporan')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bentuk Laporan:</h6>
                <a class="collapse-item @yield('collapseItemActivePelaporanPDF')" href="{{ url('report/detail/pdf') }}"><i class="fas fa-fw fa-file-pdf"></i> PDF</a>
                <a class="collapse-item @yield('collapseItemActivePelaporanXLSX')" href="{{ url('report/detail/xlsx') }}"><i class="fas fa-fw fa-file-excel"></i> XLSX</a>
                <a class="collapse-item @yield('collapseItemActivePelaporanTXT')" href="{{ url('report/detail/txt') }}"><i class="fas fa-fw fa-file-code"></i> TXT</a>
                <a class="collapse-item @yield('collapseItemActivePelaporanSQL')" href="{{ url('report/detail/sql') }}"><i class="fas fa-fw fa-database"></i> SQL</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Master Data
    </div>
    <li class="nav-item @yield('statusNavItemCar')">
        <a class="@yield('collapsedNavCar')" href="#" data-toggle="collapse" data-target="#collapseCar"
            aria-expanded="@yield('ariaExpanedNavCar')" aria-controls="collapseCar">
            <i class="fas fa-fw fa-car"></i>
            <span>Mobil</span>
        </a>
        <div id="collapseCar" class="collapse @yield('collapseShowCar')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">More:</h6>
                <a class="collapse-item @yield('collapseItemActiveCarData')" href="{{ url('mobil') }}">Data Mobil</a>
                <a class="collapse-item @yield('collapseItemActiveCarDetail')" href="{{ url('mobil/detail') }}">Data Detail Mobil</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemAdmin')">
        <a class="@yield('collapsedNavAdmin')" href="#" data-toggle="collapse" data-target="#collapseAdmin"
            aria-expanded="@yield('ariaExpanedNavAdmin')" aria-controls="collapseAdmin">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin</span>
        </a>
        <div id="collapseAdmin" class="collapse @yield('collapseShowAdmin')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">More:</h6>
                <a class="collapse-item @yield('collapseItemActiveAdminData')" href="{{ url('admin') }}">Data Admin</a>
                <a class="collapse-item @yield('collapseItemActiveAdminDetail')" href="{{ url('admin/detail') }}">Data Detail Admin</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemOwner')">
        <a class="@yield('collapsedNavOwner')" href="#" data-toggle="collapse" data-target="#collapseOwner"
            aria-expanded="@yield('ariaExpanedNavOwner')" aria-controls="collapseOwner">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Owner</span>
        </a>
        <div id="collapseOwner" class="collapse @yield('collapseShowOwner')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">More:</h6>
                <a class="collapse-item @yield('collapseItemActiveOwnerData')" href="{{ url('owner') }}">Data Owner</a>
                <a class="collapse-item @yield('collapseItemActiveOwnerDetail')" href="{{ url('owner/detail') }}">Detail Data User</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemUser')">
        <a class="@yield('collapsedNavUser')" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="@yield('ariaExpanedNavUser')" aria-controls="collapseUser">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
        </a>
        <div id="collapseUser" class="collapse @yield('collapseShowUser')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">More:</h6>
                <a class="collapse-item @yield('collapseItemActiveUserData')" href="{{ url('user') }}">Data User</a>
                <a class="collapse-item @yield('collapseItemActiveUserDetail')" href="{{ url('user/detail') }}">Detail Data User</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Pengaturan
    </div>
    <li class="nav-item @yield('statusNavItemAccount')">
        <a class="@yield('collapsedNavAccount')" href="#" data-toggle="collapse" data-target="#collapsePengaturan"
            aria-expanded="@yield('ariaExpanedNavAccount')" aria-controls="collapsePengaturan">
            <i class="fas fa-fw fa-cog"></i>
            <span>Account</span>
        </a>
        <div id="collapsePengaturan" class="collapse @yield('collapseShowAccount')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">More:</h6>
                <a class="collapse-item @yield('collapseItemActiveAccountData')" href="{{ url('akun') }}">Data Diri</a>
                <a class="collapse-item @yield('collapseItemActiveAccountRiwayat')" href="{{ url('akun/riwayat') }}">Riwayat Aktivitas</a>
                <a class="collapse-item @yield('collapseItemActiveAccountLogout')" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemWebsite')">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Website</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
