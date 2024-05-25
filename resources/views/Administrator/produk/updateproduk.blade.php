@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Produk</li>
        <li class="breadcrumb-item"><a href="{{ route('produk') }}"></a>Produk</li>
        <li class="breadcrumb-item active">Ubah Data Produk</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateproduk', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" value="{{ $data->Nama_Barang }}" required>
          </div>
          <div class="col-12">
            <label for="Kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="Kategori" name="Kategori" value="{{ $data->Kategori }}" required>
          </div>
          <div class="col-12">
            <label for="Harga_Beli" class="form-label">Harga_Beli</label>
            <input type="number" class="form-control" id="Harga_Beli" name="Harga_Beli" value="{{ $data->Harga_Beli }}" required>
          </div>
          <div class="col-12">
            <label for="Stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="Stock" name="Stock" value="{{ $data->Stock }}" required>
          </div>
          <div class="col-12">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" value="{{ $data->Satuan }}" required>
          </div>
          <div class="col-12">
            <label for="Expired" class="form-label">Expired</label>
            <input type="date" class="form-control" id="Expired" name="Expired" value="{{ $data->Expired }}" required>
          </div>
          <div class="col-12">
            <label for="Supplier" class="form-label">Supplier</label>
            <input type="text" class="form-control" id="Supplier" name="Supplier" value="{{ $data->Supplier }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection