<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    public $timestamps = false;

    protected $table = 'informasi';

    protected $fillable = [
        'nama',
        'tanggal',
        'htm',
        'lokasi',
        'image',
    ];
}
