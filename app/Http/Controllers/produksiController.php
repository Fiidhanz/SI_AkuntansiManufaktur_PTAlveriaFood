<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\produksi;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class produksiController extends Controller
{
    public function index(){
        $data = produksi::get(); 
        return view('Administrator/produksi/produksi', compact('data'));
        // $data = produksi::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/produksis/produksi', compact('data'));
    }

    public function add(){
        $data_produk = produk::get();
        $data_produksi = produksi::get();
        return view('Administrator/produksi/addproduksi', compact('data_produk','data_produksi'));
    }

    public function insertdata(Request $request){
        produksi::create($request->all());
        return redirect()->route('produksi')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = produksi::find($id);
        $data_produk= produk::get();
        $data_produksi= produksi::get();
        return view('Administrator/produksi/updateproduksi' , compact('data', 'data_produk','data_produksi'));
    }


    public function updatedata(Request $request, $id){
        $data = produksi::find($id);
        $data->update($request->all());
        return redirect()->route('produksi')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = produksi::find($id);
        $data->delete();
        return redirect()->route('produksi')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = produksi::all();
        $PDF = PDF::loadView('Administrator/produksi/reportproduksi', array('data' => $data));
        return $PDF->stream('data-produksi.pdf');
    }
}