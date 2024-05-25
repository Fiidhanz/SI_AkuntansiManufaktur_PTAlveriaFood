<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class pegawaiController extends Controller
{
    public function index(){
        $data = pegawai::get(); 
        return view('Administrator/pegawai/pegawai', compact('data'));
        // $data = pegawai::where('nama_produk', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/produks/pegawai', compact('data'));
    }

    public function add(){
        return view('Administrator/pegawai/addpegawai');
    }

    public function insertdata(Request $request){
        pegawai::create($request->all());
        return redirect()->route('pegawai')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = pegawai::find($id);
        return view('Administrator/pegawai/updatepegawai' , compact('data'));
    }

    public function alldata($id){
        $data = pegawai::find($id);
        return view('Administrator/pegawai/allpegawai' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = pegawai::all();
        $PDF = PDF::loadView('Administrator/pegawai/reportpegawai', array('data' => $data));
        return $PDF->stream('data-pegawai.pdf');
    }
}