<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraans extends Model
{
    use HasFactory;
    protected $fillable=['plat_nomor', 'merek', 'jenis', 
'tarif_per_hari'];
}
