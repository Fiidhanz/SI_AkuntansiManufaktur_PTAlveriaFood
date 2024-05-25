@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data pegawai</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pegawai</li>
        <li class="breadcrumb-item"><a href="{{ route('pegawai') }}"></a>pegawai</li>
        <li class="breadcrumb-item active">Ubah Data pegawai</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatepegawai', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="Nama_Pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="Nama_Pegawai" name="Nama_Pegawai" value="{{ $data->Nama_Pegawai }}" required>
          </div>
          <div class="col-12">
            <label for="Alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" value="{{ $data->Alamat }}" required>
          </div>
          <div class="col-12">
            <label for="Nomor_Telepon" class="form-label">Nomor_Telepon</label>
            <input type="number" class="form-control" id="Nomor_Telepon" name="Nomor_Telepon" value="{{ $data->Nomor_Telepon }}" required>
          </div>
          <div class="col-12">
            <label for="Bagian" class="form-label">Bagian</label>
            <input type="text" class="form-control" id="Bagian" name="Bagian" value="{{ $data->Bagian }}" required>
          </div>
          <div class="col-12">
            <label for="Gaji" class="form-label">Gaji</label>
            <input type="text" class="form-control" id="Gaji" name="Gaji" value="{{ $data->Gaji }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection