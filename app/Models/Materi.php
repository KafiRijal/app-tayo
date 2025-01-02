<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    public $timestamps = false;

    protected $table = 'materi_bimbingan';

    protected $fillable = [
        'topik',
        'deskripsi',
        'file',
        'video',
    ];
}
