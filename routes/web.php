<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\assetController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\pembelianController;
use App\Http\Controllers\produksiController;
use App\Http\Controllers\pemakaian_btklController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('template', function () {
    return view('layout/template');
});

Route::get('/asset', [assetController::class, 'index'])->name('asset');
Route::get('/asset/addform', [assetController::class, 'add'])->name('addasset');

Route::post('/asset/addform', [assetController::class, 'insertdata'])->name('insertasset');
    
Route::get('/asset/updateform/{id}', [assetController::class, 'readdata'])->name('readasset');

Route::get('/asset/allform/{id}', [assetController::class, 'alldata'])->name('allasset');
    
Route::post('/asset/updateform/{id}', [assetController::class, 'updatedata'])->name('updateasset');
    
Route::get('/asset/{id}', [assetController::class, 'deletedata'])->name('deleteasset');

Route::get('/pdf-asset', [assetController::class, 'exportpdf'])->name('pdfasset');

///PRODUK///
Route::get('/produk', [produkController::class, 'index'])->name('produk');

Route::get('/produk/addform', [produkController::class, 'add'])->name('addproduk');

Route::post('/produk/addform', [produkController::class, 'insertdata'])->name('insertproduk');
    
Route::get('/produk/updateform/{id}', [produkController::class, 'readdata'])->name('readproduk');

Route::get('/produk/allform/{id}', [produkController::class, 'alldata'])->name('allproduk');
    
Route::post('/produk/updateform/{id}', [produkController::class, 'updatedata'])->name('updateproduk');
    
Route::get('/produk/{id}', [produkController::class, 'deletedata'])->name('deleteproduk');

Route::get('/pdf-produk', [produkController::class, 'exportpdf'])->name('pdfproduk');

///PELANGGAN///
Route::get('/pelanggan', [pelangganController::class, 'index'])->name('pelanggan');

Route::get('/pelanggan/addform', [pelangganController::class, 'add'])->name('addpelanggan');

Route::post('/pelanggan/addform', [pelangganController::class, 'insertdata'])->name('insertpelanggan');
    
Route::get('/pelanggan/updateform/{id}', [pelangganController::class, 'readdata'])->name('readpelanggan');

Route::get('/pelanggan/allform/{id}', [pelangganController::class, 'alldata'])->name('allpelanggan');
    
Route::post('/pelanggan/updateform/{id}', [pelangganController::class, 'updatedata'])->name('updatepelanggan');
    
Route::get('/pelanggan/{id}', [pelangganController::class, 'deletedata'])->name('deletepelanggan');

Route::get('/pdf-pelanggan', [pelangganController::class, 'exportpdf'])->name('pdfpelanggan');

///PEGAWAI///
Route::get('/pegawai', [pegawaiController::class, 'index'])->name('pegawai');

Route::get('/pegawai/addform', [pegawaiController::class, 'add'])->name('addpegawai');

Route::post('/pegawai/addform', [pegawaiController::class, 'insertdata'])->name('insertpegawai');
    
Route::get('/pegawai/updateform/{id}', [pegawaiController::class, 'readdata'])->name('readpegawai');

Route::get('/pegawai/allform/{id}', [pegawaiController::class, 'alldata'])->name('allpegawai');
    
Route::post('/pegawai/updateform/{id}', [pegawaiController::class, 'updatedata'])->name('updatepegawai');
    
Route::get('/pegawai/{id}', [pegawaiController::class, 'deletedata'])->name('deletepegawai');

Route::get('/pdf-pegawai', [pegawaiController::class, 'exportpdf'])->name('pdfpegawai');

///SUPPLIER///
Route::get('/supplier', [supplierController::class, 'index'])->name('supplier');

Route::get('/supplier/addform', [supplierController::class, 'add'])->name('addsupplier');

Route::post('/supplier/addform', [supplierController::class, 'insertdata'])->name('insertsupplier');
    
Route::get('/supplier/updateform/{id}', [supplierController::class, 'readdata'])->name('readsupplier');

Route::get('/supplier/allform/{id}', [supplierController::class, 'alldata'])->name('allsupplier');
    
Route::post('/supplier/updateform/{id}', [supplierController::class, 'updatedata'])->name('updatesupplier');
    
Route::get('/supplier/{id}', [supplierController::class, 'deletedata'])->name('deletesupplier');

Route::get('/pdf-supplier', [supplierController::class, 'exportpdf'])->name('pdfsupplier');

///PENJUALAN///
Route::get('/penjualan', [penjualanController::class, 'index'])->name('penjualan');

Route::get('/penjualan/addform', [penjualanController::class, 'add'])->name('addpenjualan');

Route::post('/penjualan/addform', [penjualanController::class, 'insertdata'])->name('insertpenjualan');
    
Route::get('/penjualan/updateform/{id}', [penjualanController::class, 'readdata'])->name('readpenjualan');

Route::get('/penjualan/allform/{id}', [penjualanController::class, 'alldata'])->name('allpenjualan');
    
Route::post('/penjualan/updateform/{id}', [penjualanController::class, 'updatedata'])->name('updatepenjualan');
    
Route::get('/penjualan/{id}', [penjualanController::class, 'deletedata'])->name('deletepenjualan');

Route::get('/pdf-penjualan', [penjualanController::class, 'exportpdf'])->name('pdfpenjualan');

///PEMBELIAN///
Route::get('/pembelian', [pembelianController::class, 'index'])->name('pembelian');

Route::get('/pembelian/addform', [pembelianController::class, 'add'])->name('addpembelian');

Route::post('/pembelian/addform', [pembelianController::class, 'insertdata'])->name('insertpembelian');
    
Route::get('/pembelian/updateform/{id}', [pembelianController::class, 'readdata'])->name('readpembelian');

Route::get('/pembelian/allform/{id}', [pembelianController::class, 'alldata'])->name('allpembelian');
    
Route::post('/pembelian/updateform/{id}', [pembelianController::class, 'updatedata'])->name('updatepembelian');
    
Route::get('/pembelian/{id}', [pembelianController::class, 'deletedata'])->name('deletepembelian');

Route::get('/pdf-pembelian', [pembelianController::class, 'exportpdf'])->name('pdfpembelian');

///PRODUKSI///
Route::get('/produksi', [produksiController::class, 'index'])->name('produksi');

Route::get('/produksi/addform', [produksiController::class, 'add'])->name('addproduksi');

Route::post('/produksi/addform', [produksiController::class, 'insertdata'])->name('insertproduksi');
    
Route::get('/produksi/updateform/{id}', [produksiController::class, 'readdata'])->name('readproduksi');

Route::get('/produksi/allform/{id}', [produksiController::class, 'alldata'])->name('allproduksi');
    
Route::post('/produksi/updateform/{id}', [produksiController::class, 'updatedata'])->name('updateproduksi');
    
Route::get('/produksi/{id}', [produksiController::class, 'deletedata'])->name('deleteproduksi');

Route::get('/pdf-produksi', [produksiController::class, 'exportpdf'])->name('pdfproduksi');

///PEMAKAIAN BTKL///
Route::get('/pemakaian_btkl', [pemakaian_btklController::class, 'index'])->name('pemakaian_btkl');

Route::get('/pemakaian_btkl/addform', [pemakaian_btklController::class, 'add'])->name('addpemakaian_btkl');

Route::post('/pemakaian_btkl/addform', [pemakaian_btklController::class, 'insertdata'])->name('insertpemakaian_btkl');
    
Route::get('/pemakaian_btkl/updateform/{id}', [pemakaian_btklController::class, 'readdata'])->name('readpemakaian_btkl');

Route::get('/pemakaian_btkl/allform/{id}', [pemakaian_btklController::class, 'alldata'])->name('allpemakaian_btkl');
    
Route::post('/pemakaian_btkl/updateform/{id}', [pemakaian_btklController::class, 'updatedata'])->name('updatepemakaian_btkl');
    
Route::get('/pemakaian_btkl/{id}', [pemakaian_btklController::class, 'deletedata'])->name('deletepemakaian_btkl');

Route::get('/pdf-pemakaian_btkl', [pemakaian_btklController::class, 'exportpdf'])->name('pdfpemakaian_btkl');