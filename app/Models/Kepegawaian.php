<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepegawaian extends Model
{
    use HasFactory;

    protected $table = 'kepegawaian';

    protected $fillable = [
        'nama',
        'nip',
        'jenis_kelamin',
        'asal',
        'ttl',
        'jabatan',
        'pend',
        'gambar'
    ];
}
