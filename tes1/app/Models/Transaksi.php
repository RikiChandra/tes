<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['customer', 'tanggal_transaksi', 'tanggal_pinjam', 'tanggal_pulang', 'status', 'harga'];
}
