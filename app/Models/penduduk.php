<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduks'; // Nama tabel di database

    protected $fillable = ['key', 'value']; // Field yang bisa diisi
    
}
