<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;
    // protected $table = 'kendaraans';
    protected $fillable = ['nama_kendaraan', 'plat_kendaraan'];

}
