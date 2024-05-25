@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data pemakaian_btkl</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">pemakaian_btkl</li>
        <li class="breadcrumb-item"><a href="{{ route('pemakaian_btkl') }}"></a>Data pemakaian_btkl</li>
        <li class="breadcrumb-item active">Tambah Data pemakaian_btkl</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertpemakaian_btkl') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_Produksi" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="id_Produksi" name="id_Produksi" required>
          </div>
          <div class="col-12">
            <label for="id_Pegawai" class="form-label">id_Pegawai</label>
            <input type="text" class="form-control" id="id_Pegawai" name="id_Pegawai" required>
          </div>
          <div class="col-12">
            <label for="Nama_Pegawai" class="form-label">Nama_Pegawai</label>
            <input type="text" class="form-control" id="Nama_Pegawai" name="Nama_Pegawai" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection