<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    public $timestamps = false;

    protected $table = 'jadwal_bimbingan';

    protected $fillable = [
        'tanggal',
        'waktu',
        'lokasi',
        'dosen_id',
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
