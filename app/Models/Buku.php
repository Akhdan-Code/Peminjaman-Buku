<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    protected $table = 'pinjam_buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_peminjam',
        'nama_buku',
        'jumlah_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'denda',
    ];
}
