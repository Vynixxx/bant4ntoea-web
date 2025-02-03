<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class galerikegiatan extends Model
{
    use HasFactory;

    protected $table = 'galerikegiatan';

    protected $fillable = [
        'judul', 'isi', 'gambar', 'tanggal', 'tag', 'slug',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($galerikegiatan) {
            $galerikegiatan->slug = Str::slug($galerikegiatan->judul, '-');
        });

        static::updating(function ($galerikegiatan) {
            $galerikegiatan->slug = Str::slug($galerikegiatan->judul, '-');
        });
    }
}
