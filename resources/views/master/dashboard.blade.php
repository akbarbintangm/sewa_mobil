@extends('layouts.app')

@section('pageTitle')
Dashboard
@endsection

@section('statusNavItemDashboard')
active
@endsection
@section('statusNavItemPelaporan')
@endsection
@section('statusNavItemCar')
@endsection
@section('statusNavItemAdmin')
@endsection
@section('statusNavItemOwner')
@endsection
@section('statusNavItemUser')
@endsection
@section('statusNavItemAccount')
@endsection
@section('statusNavItemWebsite')
@endsection

@section('collapsedNavDashboard')
@endsection
@section('collapsedNavPelaporan')
nav-link collapsed
@endsection
@section('collapsedNavCar')
nav-link collapsed
@endsection
@section('collapsedNavAdmin')
nav-link collapsed
@endsection
@section('collapsedNavOwner')
nav-link collapsed
@endsection
@section('collapsedNavUser')
nav-link collapsed
@endsection
@section('collapsedNavAccount')
nav-link collapsed
@endsection
@section('collapsedNavWebsite')
@endsection

@section('ariaExpanedNavDashboard')
@endsection
@section('ariaExpanedNavPelaporan')
true
@endsection
@section('ariaExpanedNavCar')
true
@endsection
@section('ariaExpanedNavAdmin')
true
@endsection
@section('ariaExpanedNavOwner')
true
@endsection
@section('ariaExpanedNavUser')
true
@endsection
@section('ariaExpanedNavAccount')
true
@endsection
@section('ariaExpanedNavWebsite')
@endsection

@section('collapseShowDashboard')
@endsection
@section('collapseShowPelaporan')
@endsection
@section('collapseShowCar')
@endsection
@section('collapseShowAdmin')
@endsection
@section('collapseShowOwner')
@endsection
@section('collapseShowUser')
@endsection
@section('collapseShowAccount')
@endsection
@section('collapseShowWebsite')
@endsection

@section('collapseItemActiveDashboard')
@endsection
@section('collapseItemActivePelaporan')
@endsection
@section('collapseItemActiveCar')
@endsection
@section('collapseItemActiveAdmin')
@endsection
@section('collapseItemActiveOwner')
@endsection
@section('collapseItemActiveUser')
@endsection
@section('collapseItemActiveAccount')
@endsection
@section('collapseItemActiveWebsite')
@endsection

@section('collapseItemActivePelaporanPDF')
@endsection
@section('collapseItemActivePelaporanXLSX')
@endsection
@section('collapseItemActivePelaporanTXT')
@endsection
@section('collapseItemActivePelaporanSQL')
@endsection
@section('collapseItemActiveCarData')
@endsection
@section('collapseItemActiveCarDetail')
@endsection
@section('collapseItemActiveAdminData')
@endsection
@section('collapseItemActiveAdminDetail')
@endsection
@section('collapseItemActiveOwnerData')
@endsection
@section('collapseItemActiveOwnerDetail')
@endsection
@section('collapseItemActiveUserData')
@endsection
@section('collapseItemActiveUserDetail')
@endsection
@section('collapseItemActiveAccountData')
@endsection
@section('collapseItemActiveAccountRiwayat')
@endsection
@section('collapseItemActiveAccountLogout')
@endsection

@section('content')
<div id="wrapper">
    @include('layouts.master.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layouts.master.topbar')
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm disabled"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Earnings (Monthly)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<span class="counter">40.000</span></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Earnings (Annual)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<span class="counter">215.000</span></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Carcycle Sold
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span class="counter">75</span>%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info animate__animated animate__fadeInLeft" role="progressbar"
                                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Pending Requests</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="counter">18</span></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Total Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="counter">25</span></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-dark shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                            Total Carcycle</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="counter">500</span></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-motorcycle fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-secondary shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            Total Admin</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="counter">20</span></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info bg-dark shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                            Lain-lain</div>
                                        <div class="h5 mb-0 font-weight-bold text-light"><span class="counter">2</span></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-motorcycle fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.master.footer')
    </div>
</div>
@include('layouts.master.scrolltotop')
@endsection

@section('script')

@endsection
