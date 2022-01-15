<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MWebsiteController;
use App\Http\Controllers\MAdminController;
use App\Http\Controllers\MOperatorController;
use App\Http\Controllers\MOwnerController;
use App\Http\Controllers\MUserController;
use App\Http\Controllers\MCountryController;
use App\Http\Controllers\MProvinceController;
use App\Http\Controllers\MCityController;
use App\Http\Controllers\MDistrictController;
use App\Http\Controllers\MSubDistrictController;
use App\Http\Controllers\MMobilController;
use App\Http\Controllers\MTranmisiMobilController;
use App\Http\Controllers\MBrandMobilController;
use App\Http\Controllers\MKategoriMobilController;
use App\Http\Controllers\MPostController;
use App\Http\Controllers\MChattingController;
use App\Http\Controllers\MBankController;
use App\Http\Controllers\MPembayaranController;
use App\Http\Controllers\MBookingController;
use App\Http\Controllers\MReservasiController;
use App\Http\Controllers\MTransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

Route::get('/', function () {
    return view('landing');
});

/* Route::get('/login', function () {
    return redirect()->route('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/verify', function () {
    return view('auth/verify');
});
Route::get('/passwords/reset', function () {
    return view('auth/passwords/reset');
});
Route::get('/passwords/email', function () {
    return view('auth/passwords/email');
});
Route::get('/passwords/confirm', function () {
    return view('auth/passwords/confirm');
});
 */
/* Route::get('/home', [HomeController::class, 'index'])->name('home');  */

Route::get('/admin', function() {
    return redirect()->route('auth.login');
});

Route::middleware('guest')->name('auth.')->group(function() {
    Route::get('/login', [MWebsiteController::class, 'login'])->name('login');
    Route::post('/login', [MWebsiteController::class, 'doLogin'])->name('do.login');
    Route::get('/register', [MWebsiteController::class, 'register'])->name('register');
    Route::post('/register', [MWebsiteController::class, 'doRegister'])->name('do.register');
});

Route::get('/admin/logout', [MWebsiteController::class, 'logout'])->middleware('auth')->name('auth.logout');
/* Route::get('/operator/logout', [MWebsiteController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::get('/owner/logout', [MWebsiteController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::get('/user/logout', [MWebsiteController::class, 'logout'])->middleware('auth')->name('auth.logout');
 */
Route::middleware('auth')->group(function() {
    /* Admin Has Login */
    // Admin Page & Setting
    Route::get('/admin', [MWebsiteController::class, 'index']);
    Route::get('/admin/dashboard', [MWebsiteController::class, 'index']);
    Route::get('/admin/akun', [MWebsiteController::class, 'account']);
    Route::get('/admin/akun/riwayat', [MWebsiteController::class, 'history']);
    Route::get('/admin/setting', [MWebsiteController::class, 'setting']);

    // Admin List
    Route::get('/admin/admin', [MAdminController::class, 'index']);
    Route::get('/admin/admin/create', [MAdminController::class, 'create']);
    Route::post('/admin/admin/store', [MAdminController::class, 'store']);
    Route::post('/admin/admin/show/{id}', [MAdminController::class, 'show']);
    Route::get('/admin/admin/edit/{id}', [MAdminController::class, 'edit']);
    Route::post('/admin/admin/update/{id}', [MAdminController::class, 'update']);
    Route::get('/admin/admin/destroy/{id}', [MAdminController::class, 'destroy']);

    // Operator List
    Route::get('/admin/operator', [MOperatorController::class, 'index']);
    Route::get('/admin/operator/create', [MOperatorController::class, 'create']);
    Route::post('/admin/operator/store', [MOperatorController::class, 'store']);
    Route::post('/admin/operator/show/{id}', [MOperatorController::class, 'show']);
    Route::get('/admin/operator/edit/{id}', [MOperatorController::class, 'edit']);
    Route::post('/admin/operator/update/{id}', [MOperatorController::class, 'update']);
    Route::get('/admin/operator/destroy/{id}', [MOperatorController::class, 'destroy']);

    // Owner List
    Route::get('/admin/owner', [MOwnerController::class, 'index']);
    Route::get('/admin/owner/create', [MOwnerController::class, 'create']);
    Route::post('/admin/owner/store', [MOwnerController::class, 'store']);
    Route::post('/admin/owner/show/{id}', [MOwnerController::class, 'show']);
    Route::get('/admin/owner/edit/{id}', [MOwnerController::class, 'edit']);
    Route::post('/admin/owner/update/{id}', [MOwnerController::class, 'update']);
    Route::get('/admin/owner/destroy/{id}', [MOwnerController::class, 'destroy']);

    // User List
    Route::get('/admin/user', [MUserController::class, 'index']);
    Route::get('/admin/user/create', [MUserController::class, 'create']);
    Route::post('/admin/user/store', [MUserController::class, 'store']);
    Route::post('/admin/user/show/{id}', [MUserController::class, 'show']);
    Route::get('/admin/user/edit/{id}', [MUserController::class, 'edit']);
    Route::post('/admin/user/update/{id}', [MUserController::class, 'update']);
    Route::get('/admin/user/destroy/{id}', [MUserController::class, 'destroy']);

    // Country List
    Route::get('/admin/country', [MCountryController::class, 'index']);
    Route::get('/admin/country/create', [MCountryController::class, 'create']);
    Route::post('/admin/country/store', [MCountryController::class, 'store']);
    Route::post('/admin/country/show/{id}', [MCountryController::class, 'show']);
    Route::get('/admin/country/edit/{id}', [MCountryController::class, 'edit']);
    Route::post('/admin/country/update/{id}', [MCountryController::class, 'update']);
    Route::get('/admin/country/destroy/{id}', [MCountryController::class, 'destroy']);

    // Province List
    Route::get('/admin/province', [MProvinceController::class, 'index']);
    Route::get('/admin/province/create', [MProvinceController::class, 'create']);
    Route::post('/admin/province/store', [MProvinceController::class, 'store']);
    Route::post('/admin/province/show/{id}', [MProvinceController::class, 'show']);
    Route::get('/admin/province/edit/{id}', [MProvinceController::class, 'edit']);
    Route::post('/admin/province/update/{id}', [MProvinceController::class, 'update']);
    Route::get('/admin/province/destroy/{id}', [MProvinceController::class, 'destroy']);

    // City List
    Route::get('/admin/city', [MCityController::class, 'index']);
    Route::get('/admin/city/create', [MCityController::class, 'create']);
    Route::post('/admin/city/store', [MCityController::class, 'store']);
    Route::post('/admin/city/show/{id}', [MCityController::class, 'show']);
    Route::get('/admin/city/edit/{id}', [MCityController::class, 'edit']);
    Route::post('/admin/city/update/{id}', [MCityController::class, 'update']);
    Route::get('/admin/city/destroy/{id}', [MCityController::class, 'destroy']);

    // District List
    Route::get('/admin/district', [MDistrictController::class, 'index']);
    Route::get('/admin/district/create', [MDistrictController::class, 'create']);
    Route::post('/admin/district/store', [MDistrictController::class, 'store']);
    Route::post('/admin/district/show/{id}', [MDistrictController::class, 'show']);
    Route::get('/admin/district/edit/{id}', [MDistrictController::class, 'edit']);
    Route::post('/admin/district/update/{id}', [MDistrictController::class, 'update']);
    Route::get('/admin/district/destroy/{id}', [MDistrictController::class, 'destroy']);

    // Sub District List
    Route::get('/admin/sub_district', [MSubDistrictController::class, 'index']);
    Route::get('/admin/sub_district/create', [MSubDistrictController::class, 'create']);
    Route::post('/admin/sub_district/store', [MSubDistrictController::class, 'store']);
    Route::post('/admin/sub_district/show/{id}', [MSubDistrictController::class, 'show']);
    Route::get('/admin/sub_district/edit/{id}', [MSubDistrictController::class, 'edit']);
    Route::post('/admin/sub_district/update/{id}', [MSubDistrictController::class, 'update']);
    Route::get('/admin/sub_district/destroy/{id}', [MSubDistrictController::class, 'destroy']);

    // Mobil List
    Route::get('/admin/mobil', [MMobilController::class, 'index']);
    Route::get('/admin/mobil/create', [MMobilController::class, 'create']);
    Route::post('/admin/mobil/store', [MMobilController::class, 'store']);
    Route::post('/admin/mobil/show/{id}', [MMobilController::class, 'show']);
    Route::get('/admin/mobil/edit/{id}', [MMobilController::class, 'edit']);
    Route::post('/admin/mobil/update/{id}', [MMobilController::class, 'update']);
    Route::get('/admin/mobil/destroy/{id}', [MMobilController::class, 'destroy']);

    // Mobil List
    Route::get('/admin/transmisi_mobil', [MTranmisiMobilController::class, 'index']);
    Route::get('/admin/transmisi_mobil/create', [MTranmisiMobilController::class, 'create']);
    Route::post('/admin/transmisi_mobil/store', [MTranmisiMobilController::class, 'store']);
    Route::post('/admin/transmisi_mobil/show/{id}', [MTranmisiMobilController::class, 'show']);
    Route::get('/admin/transmisi_mobil/edit/{id}', [MTranmisiMobilController::class, 'edit']);
    Route::post('/admin/transmisi_mobil/update/{id}', [MTranmisiMobilController::class, 'update']);
    Route::get('/admin/transmisi_mobil/destroy/{id}', [MTranmisiMobilController::class, 'destroy']);

    // Brand Mobil List
    Route::get('/admin/brand_mobil', [MBrandMobilController::class, 'index']);
    Route::get('/admin/brand_mobil/create', [MBrandMobilController::class, 'create']);
    Route::post('/admin/brand_mobil/store', [MBrandMobilController::class, 'store']);
    Route::post('/admin/brand_mobil/show/{id}', [MBrandMobilController::class, 'show']);
    Route::get('/admin/brand_mobil/edit/{id}', [MBrandMobilController::class, 'edit']);
    Route::post('/admin/brand_mobil/update/{id}', [MBrandMobilController::class, 'update']);
    Route::get('/admin/brand_mobil/destroy/{id}', [MBrandMobilController::class, 'destroy']);

    // Kategori Mobil List
    Route::get('/admin/mobil', [MKategoriMobilController::class, 'index']);
    Route::get('/admin/mobil/create', [MKategoriMobilController::class, 'create']);
    Route::post('/admin/mobil/store', [MKategoriMobilController::class, 'store']);
    Route::post('/admin/mobil/show/{id}', [MKategoriMobilController::class, 'show']);
    Route::get('/admin/mobil/edit/{id}', [MKategoriMobilController::class, 'edit']);
    Route::post('/admin/mobil/update/{id}', [MKategoriMobilController::class, 'update']);
    Route::get('/admin/mobil/destroy/{id}', [MKategoriMobilController::class, 'destroy']);

    // Post List
    Route::get('/admin/post', [MPostController::class, 'index']);
    Route::get('/admin/post/create', [MPostController::class, 'create']);
    Route::post('/admin/post/store', [MPostController::class, 'store']);
    Route::post('/admin/post/show/{id}', [MPostController::class, 'show']);
    Route::get('/admin/post/edit/{id}', [MPostController::class, 'edit']);
    Route::post('/admin/post/update/{id}', [MPostController::class, 'update']);
    Route::get('/admin/post/destroy/{id}', [MPostController::class, 'destroy']);

    // Chatting List
    Route::get('/admin/chatting', [MChattingController::class, 'index']);
    Route::get('/admin/chatting/create', [MChattingController::class, 'create']);
    Route::post('/admin/chatting/store', [MChattingController::class, 'store']);
    Route::post('/admin/chatting/show/{id}', [MChattingController::class, 'show']);
    Route::get('/admin/chatting/edit/{id}', [MChattingController::class, 'edit']);
    Route::post('/admin/chatting/update/{id}', [MChattingController::class, 'update']);
    Route::get('/admin/chatting/destroy/{id}', [MChattingController::class, 'destroy']);

    // Bank List
    Route::get('/admin/bank', [MBankController::class, 'index']);
    Route::get('/admin/bank/create', [MBankController::class, 'create']);
    Route::post('/admin/bank/store', [MBankController::class, 'store']);
    Route::post('/admin/bank/show/{id}', [MBankController::class, 'show']);
    Route::get('/admin/bank/edit/{id}', [MBankController::class, 'edit']);
    Route::post('/admin/bank/update/{id}', [MBankController::class, 'update']);
    Route::get('/admin/bank/destroy/{id}', [MBankController::class, 'destroy']);

    // Pembayaran List
    Route::get('/admin/pembayaran', [MPembayaranController::class, 'index']);
    Route::get('/admin/pembayaran/create', [MPembayaranController::class, 'create']);
    Route::post('/admin/pembayaran/store', [MPembayaranController::class, 'store']);
    Route::post('/admin/pembayaran/show/{id}', [MPembayaranController::class, 'show']);
    Route::get('/admin/pembayaran/edit/{id}', [MPembayaranController::class, 'edit']);
    Route::post('/admin/pembayaran/update/{id}', [MPembayaranController::class, 'update']);
    Route::get('/admin/pembayaran/destroy/{id}', [MPembayaranController::class, 'destroy']);

    // Booking List
    Route::get('/admin/booking', [MBookingController::class, 'index']);
    Route::get('/admin/booking/create', [MBookingController::class, 'create']);
    Route::post('/admin/booking/store', [MBookingController::class, 'store']);
    Route::post('/admin/booking/show/{id}', [MBookingController::class, 'show']);
    Route::get('/admin/booking/edit/{id}', [MBookingController::class, 'edit']);
    Route::post('/admin/booking/update/{id}', [MBookingController::class, 'update']);
    Route::get('/admin/booking/destroy/{id}', [MBookingController::class, 'destroy']);

    // Reservasi List
    Route::get('/admin/reservasi', [MReservasiController::class, 'index']);
    Route::get('/admin/reservasi/create', [MReservasiController::class, 'create']);
    Route::post('/admin/reservasi/store', [MReservasiController::class, 'store']);
    Route::post('/admin/reservasi/show/{id}', [MReservasiController::class, 'show']);
    Route::get('/admin/reservasi/edit/{id}', [MReservasiController::class, 'edit']);
    Route::post('/admin/reservasi/update/{id}', [MReservasiController::class, 'update']);
    Route::get('/admin/reservasi/destroy/{id}', [MReservasiController::class, 'destroy']);

    // Transaksi List
    Route::get('/admin/transaksi', [MTransaksiController::class, 'index']);
    Route::get('/admin/transaksi/create', [MTransaksiController::class, 'create']);
    Route::post('/admin/transaksi/store', [MTransaksiController::class, 'store']);
    Route::post('/admin/transaksi/show/{id}', [MTransaksiController::class, 'show']);
    Route::get('/admin/transaksi/edit/{id}', [MTransaksiController::class, 'edit']);
    Route::post('/admin/transaksi/update/{id}', [MTransaksiController::class, 'update']);
    Route::get('/admin/transaksi/destroy/{id}', [MTransaksiController::class, 'destroy']);
});

Route::get('/operator', function() {
    return redirect()->route('auth.login');
});

Route::get('/owner', function() {
    return redirect()->route('auth.login');
});

Route::get('/user', function() {
    return redirect()->route('auth.login');
});
