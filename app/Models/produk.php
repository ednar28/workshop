<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    // Nama tabel yang sesuai dengan model
    protected $table = 'produks';
    // Kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
    'nama_produk', 
    'deskripsi_produk', 
    'harga_produk', 
    'gambar_produk', 
    'merek_produk', 
    'tanggal_rilis_produk', 
    'id_kategori', 
    'id_pengguna',
    ];

    // Definisikan relasi dengan tabel 'kategoris'
    public function kategori()
    {
    return $this->belongsTo('App\Kategori', 'id_kategori', 'id_kategori');
    }
    // Definisikan relasi dengan tabel 'users'
    public function pengguna()
    {
    return $this->belongsTo('App\User', 'id_pengguna', 'id_pengguna');
    }

}
