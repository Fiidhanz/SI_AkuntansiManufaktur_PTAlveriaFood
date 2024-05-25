@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data produksi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">produksi</li>
        <li class="breadcrumb-item"><a href="{{ route('produksi') }}"></a>Data produksi</li>
        <li class="breadcrumb-item active">Tambah Data produksi</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertproduksi') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_Produk" class="form-label">Nomor Faktur</label>
            <input type="number" class="form-control" id="id_Produk" name="id_Produk" required>
          </div>
          <div class="col-12">
            <label for="Nama_Barang" class="form-label">Nama_Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" required>
          </div>
          <div class="col-12">
            <label for="Tanggal_Produksi" class="form-label">Tanggal_Produksi</label>
            <input type="date" class="form-control" id="Tanggal_Produksi" name="Tanggal_Produksi" required>
          </div>
          <div class="col-12">
            <label for="Total_Produksi" class="form-label">Total_Produksi</label>
            <input type="number" class="form-control" id="Total_Produksi" name="Total_Produksi" required>
          </div>
          <div class="col-12">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" required>
          </div>
          <div class="col-12">
            <label for="Expired" class="form-label">Expired</label>
            <input type="date" class="form-control" id="Expired" name="Expired" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection