<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sewas extends Model
{
    use HasFactory;
    protected $fillable=['kendaraan_id', 'nama_penyewa', 'tanggal_mulai', 'lama_sewa', 'total_biaya', 'status'];
}
