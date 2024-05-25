<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    
    protected $table = 'produksis';
    
    protected $fillable = [
        'id_Produksi',
        'id_Produk',
        'Nama_Barang',
        'Tanggal_Produksi',
        'Total_Produksi',
        'Satuan',
        'Expired',

    ];
    public function produk()
    {
        return $this->belongsTo(produk::class, 'id_Barang');
    }
}
