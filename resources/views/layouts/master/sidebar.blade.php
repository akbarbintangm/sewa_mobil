<ul class="navbar-nav bg-info sidebar sidebar-dark accordion fixed" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sewa Mobil</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item @yield('statusNavItemDashboard')">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Transaksi
    </div>
    <li class="nav-item @yield('statusNavItemTransaksi')">
        <a class="@yield('collapsedNavTransaksi')" href="#" data-toggle="collapse" data-target="#collapseTransaksi"
            aria-expanded="@yield('ariaExpanedNavTransaksi')" aria-controls="collapseTransaksi">
            <i class="fas fa-fw fa-file"></i>
            <span>Semua Transaksi</span>
        </a>
        <div id="collapseTransaksi" class="collapse @yield('collapseShowTransaksi')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @yield('collapseItemActiveTransaksiData')" href="{{ url('admin/transaksi') }}">Data Transaksi</a>
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveTransaksiPDF')" href="{{ url('admin/transaksi/pdf') }}"><i class="fas fa-fw fa-file-pdf"></i> PDF</a>
                <a class="collapse-item @yield('collapseItemActiveTransaksiXLSX')" href="{{ url('admin/transaksi/xlsx') }}"><i class="fas fa-fw fa-file-excel"></i> XLSX</a>
                <a class="collapse-item @yield('collapseItemActiveTransaksiTXT')" href="{{ url('admin/transaksi/txt') }}"><i class="fas fa-fw fa-file-code"></i> TXT</a>
                <a class="collapse-item @yield('collapseItemActiveTransaksiSQL')" href="{{ url('admin/transaksi/sql') }}"><i class="fas fa-fw fa-database"></i> SQL</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemBooking')">
        <a class="@yield('collapsedNavBooking')" href="#" data-toggle="collapse" data-target="#collapseBooking"
            aria-expanded="@yield('ariaExpanedNavBooking')" aria-controls="collapseBooking">
            <i class="fas fa-fw fa-book"></i>
            <span>Booking</span>
        </a>
        <div id="collapseBooking" class="collapse @yield('collapseShowBooking')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @yield('collapseItemActiveBookingData')" href="{{ url('admin/booking') }}">Data Booking</a>
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveBookingPDF')" href="{{ url('admin/booking/pdf') }}"><i class="fas fa-fw fa-file-pdf"></i> PDF</a>
                <a class="collapse-item @yield('collapseItemActiveBookingXLSX')" href="{{ url('admin/booking/xlsx') }}"><i class="fas fa-fw fa-file-excel"></i> XLSX</a>
                <a class="collapse-item @yield('collapseItemActiveBookingTXT')" href="{{ url('admin/booking/txt') }}"><i class="fas fa-fw fa-file-code"></i> TXT</a>
                <a class="collapse-item @yield('collapseItemActiveBookingSQL')" href="{{ url('admin/booking/sql') }}"><i class="fas fa-fw fa-database"></i> SQL</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemReservasi')">
        <a class="@yield('collapsedNavReservasi')" href="#" data-toggle="collapse" data-target="#collapseReservasi"
            aria-expanded="@yield('ariaExpanedNavReservasi')" aria-controls="collapseReservasi">
            <i class="fas fa-fw fa-comments"></i>
            <span>Reservasi</span>
        </a>
        <div id="collapseReservasi" class="collapse @yield('collapseShowReservasi')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @yield('collapseItemActiveReservasiData')" href="{{ url('admin/reservasi') }}">Data Reservasi</a>
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveReservasiPDF')" href="{{ url('admin/reservasi/pdf') }}"><i class="fas fa-fw fa-file-pdf"></i> PDF</a>
                <a class="collapse-item @yield('collapseItemActiveReservasiXLSX')" href="{{ url('admin/reservasi/xlsx') }}"><i class="fas fa-fw fa-file-excel"></i> XLSX</a>
                <a class="collapse-item @yield('collapseItemActiveReservasiTXT')" href="{{ url('admin/reservasi/txt') }}"><i class="fas fa-fw fa-file-code"></i> TXT</a>
                <a class="collapse-item @yield('collapseItemActiveReservasiSQL')" href="{{ url('admin/reservasi/sql') }}"><i class="fas fa-fw fa-database"></i> SQL</a>
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
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveCarData')" href="{{ url('admin/mobil') }}">Data Mobil</a>
                <a class="collapse-item @yield('collapseItemActiveCarTransmission')" href="{{ url('admin/transmisi_mobil') }}">Transmisi Mobil</a>
                <a class="collapse-item @yield('collapseItemActiveCarBrand')" href="{{ url('admin/brand_mobil') }}">Brand Mobil</a>
                <a class="collapse-item @yield('collapseItemActiveCarCategory')" href="{{ url('admin/kategori_mobil') }}">Kategori Mobil</a>

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
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveAdminData')" href="{{ url('admin/admin') }}">Data Admin</a>
                <a class="collapse-item @yield('collapseItemActiveAdminDetail')" href="{{ url('admin/admin/detail') }}">Data Detail Admin</a>
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
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveOwnerData')" href="{{ url('admin/owner') }}">Data Owner</a>
                <a class="collapse-item @yield('collapseItemActiveOwnerDetail')" href="{{ url('admin/owner/detail') }}">Detail Data User</a>
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
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveUserData')" href="{{ url('admin/user') }}">Data User</a>
                <a class="collapse-item @yield('collapseItemActiveUserDetail')" href="{{ url('admin/user/detail') }}">Detail Data User</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Lainnya
    </div>
    <li class="nav-item @yield('statusNavItemAdministrative')">
        <a class="@yield('collapsedNavAdministrative')" href="#" data-toggle="collapse" data-target="#collapseAdministrative"
            aria-expanded="@yield('ariaExpanedNavAdministrative')" aria-controls="collapseAdministrative">
            <i class="fas fa-fw fa-globe"></i>
            <span>Administratif</span>
        </a>
        <div id="collapseAdministrative" class="collapse @yield('collapseShowAdministrative')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveAdministrativeCountry')" href="{{ url('admin/country') }}">Negara</a>
                <a class="collapse-item @yield('collapseItemActiveAdministrativeProvince')" href="{{ url('admin/province') }}">Provinsi</a>
                <a class="collapse-item @yield('collapseItemActiveAdministrativeCity')" href="{{ url('admin/city') }}">Kota</a>
                <a class="collapse-item @yield('collapseItemActiveAdministrativeDistrict')" href="{{ url('admin/district') }}">Kabupaten</a>
                <a class="collapse-item @yield('collapseItemActiveAdministrativeSubDistrict')" href="{{ url('admin/sub_district') }}">Kecamatan</a>

            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemChatting')">
        <a class="@yield('collapsedNavChatting')" href="#" data-toggle="collapse" data-target="#collapseChatting"
            aria-expanded="@yield('ariaExpanedNavChatting')" aria-controls="collapseChatting">
            <i class="fas fa-fw fa-comment-dots"></i>
            <span>Chatting</span>
        </a>
        <div id="collapseChatting" class="collapse @yield('collapseShowChatting')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveChattingData')" href="{{ url('admin/chat') }}">Data Chat</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemPembayaran')">
        <a class="@yield('collapsedNavPembayaran')" href="#" data-toggle="collapse" data-target="#collapsePembayaran"
            aria-expanded="@yield('ariaExpanedNavPembayaran')" aria-controls="collapsePembayaran">
            <i class="fas fa-fw fa-money-check-alt"></i>
            <span>Pembayaran</span>
        </a>
        <div id="collapsePembayaran" class="collapse @yield('collapseShowPembayaran')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActivePembayaranData')" href="{{ url('admin/pembayaran') }}">Data Pembayaran</a>            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemBank')">
        <a class="@yield('collapsedNavBank')" href="#" data-toggle="collapse" data-target="#collapseBank"
            aria-expanded="@yield('ariaExpanedNavBank')" aria-controls="collapseBank">
            <i class="fas fa-fw fa-piggy-bank"></i>
            <span>Bank</span>
        </a>
        <div id="collapseBank" class="collapse @yield('collapseShowBank')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveBankData')" href="{{ url('admin/bank') }}">Data Bank</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemPost')">
        <a class="@yield('collapsedNavPost')" href="#" data-toggle="collapse" data-target="#collapsePost"
            aria-expanded="@yield('ariaExpanedNavPost')" aria-controls="collapsePost">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Posting</span>
        </a>
        <div id="collapsePost" class="collapse @yield('collapseShowPost')" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActivePostData')" href="{{ url('admin/post') }}">Data Posting</a>
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
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item @yield('collapseItemActiveAccountData')" href="{{ url('admin/akun') }}">Data Diri</a>
                <a class="collapse-item @yield('collapseItemActiveAccountRiwayat')" href="{{ url('admin/akun/riwayat') }}">Riwayat Aktivitas</a>
                <a class="collapse-item @yield('collapseItemActiveAccountLogout')" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('statusNavItemWebsite')">
        <a class="nav-link" href="{{ url('admin/setting') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Website</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
