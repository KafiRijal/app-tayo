<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lacak extends Model
{
    public $timestamps = false;

    protected $table = 'daftar_tugas';

    protected $fillable = [
        'deskripsi',
    ];
}
