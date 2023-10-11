<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Aufar Hadni Azzakky 46-03 6706223109

class Collection extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = "collection";
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi'
    ];
}
