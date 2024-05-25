@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Data produksi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">produksi</li>
    </ol>
    </nav>
</div><!-- End Page Title -->
{{-- Alert Success Add --}}
    @if (session()->has('primary'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('primary') }}
        </div>
    @endif
{{-- Alert Success Update --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
{{-- Alert Success Delete --}}
    @if (session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
        </div>
    @endif
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="buttons">
        <a href="{{ route('addproduksi') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('pdfproduksi') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>id_Produk</th>
                                <th>Nama Barang</th>
                                <th>Tanggal_Produksi</th>
                                <th>Total_Produksi</th> 
                                <th>Satuan</th>      
                                <th>Expired</th>     
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->id_Produksi}}</td>
                                    <td>{{ $row->Nama_Barang}}</td>
                                    <td>{{ $row->Tanggal_Produksi }}</td>
                                    <td>{{ $row->Total_Produksi }}</td>
                                    <td>{{ $row->Satuan }}</td>
                                    <td>{{ $row->Expired }}</td>
                                    <td>
                                        <a href="{{ route('readproduksi', $row->id) }}" class="btn icon btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('deleteproduksi', $row->id) }}" class="btn icon btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash-alt"></i></i></a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5"><p class="text text-center">No results found.</p></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection