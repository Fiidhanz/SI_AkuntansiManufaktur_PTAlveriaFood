@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data produksi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">produksi</li>
        <li class="breadcrumb-item"><a href="{{ route('produksi') }}"></a>produksi</li>
        <li class="breadcrumb-item active">Ubah Data produksi</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateproduksi', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_Produksi" class="form-label">id_Produksi</label>
            <input type="number" class="form-control" id="id_Produksi" name="id_Produksi" value="{{ $data->id_Produksi }}" required>
          </div>
          <div class="col-12">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" value="{{ $data->Nama_Barang }}" required>
          </div>
          <div class="col-12">
            <label for="Tanggal_Produksi" class="form-label">Tanggal_Produksi</label>
            <input type="date" class="form-control" id="Tanggal_Produksi" name="Tanggal_Produksi" value="{{ $data->Tanggal_Produksi }}" required>
          </div>
          <div class="col-12">
            <label for="Total_Produksi" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="Quantity" name="Quantity" value="{{ $data->Quantity }}" required>
          </div>
          <div class="col-12">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" value="{{ $data->Satuan }}" required>
          </div>
          <div class="col-12">
            <label for="Expired" class="form-label">Expired</label>
            <input type="date" class="form-control" id="Expired" name="Expired" value="{{ $data->Expired }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection