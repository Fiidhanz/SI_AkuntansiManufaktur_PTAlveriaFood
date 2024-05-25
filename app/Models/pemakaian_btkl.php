<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemakaian_btkl extends Model
{
    use HasFactory;
    protected $table = 'pemakaian_btkls';
    
    protected $fillable = [
        'id_Produksi',
        'id_Pegawai',
        'Nama_Pegawai',
    ];
    public function pegawai()
    {
        return $this->belongsTo(pegawai::class, 'id_Pegawai');
    }
    public function produksi()
    {
        return $this->belongsTo(produksi::class, 'id_Produksi');
    }
}
