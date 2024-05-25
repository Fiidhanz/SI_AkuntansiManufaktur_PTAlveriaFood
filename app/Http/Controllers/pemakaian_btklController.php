<?php

namespace App\Http\Controllers;

use App\Models\produksi;
use App\Models\pemakaian_btkl;
use App\Models\pegawai;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class pemakaian_btklController extends Controller
{
    public function index(){
        $data = pemakaian_btkl::get(); 
        return view('Administrator/pemakaian_btkl/pemakaian_btkl', compact('data'));
        // $data = pemakaian_btkl::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/pemakaian_btkls/pemakaian_btkl', compact('data'));
    }

    public function add(){
        $data = pemakaian_btkl::get();
        $data_produksi = produksi::get();
        $data_pegawai = pegawai::get();
        return view('Administrator/pemakaian_btkl/addpemakaian_btkl', compact('data','data_produksi','data_pegawai'));
    }

    public function insertdata(Request $request){
        pemakaian_btkl::create($request->all());
        return redirect()->route('pemakaian_btkl')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = pemakaian_btkl::find($id);
        $data_produksi= produksi::get();
        $data_pemakaian_btkl = pemakaian_btkl::get();
        $data_pegawai = pegawai::get();
        return view('Administrator/pemakaian_btkl/updatepemakaian_btkl' , compact('data', 'data_produksi','data_pegawai','data_pemakaian_btkl'));
    }


    public function updatedata(Request $request, $id){
        $data = pemakaian_btkl::find($id);
        $data->update($request->all());
        return redirect()->route('pemakaian_btkl')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = pemakaian_btkl::find($id);
        $data->delete();
        return redirect()->route('pemakaian_btkl')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = pemakaian_btkl::all();
        $PDF = PDF::loadView('Administrator/pemakaian_btkl/reportpemakaian_btkl', array('data' => $data));
        return $PDF->stream('data-pemakaian_btkl.pdf');
    }
}