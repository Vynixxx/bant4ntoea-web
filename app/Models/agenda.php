<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    protected $fillable = [
        'judul',
        'slug',
        'tanggal',
        'keterangan',
    ];
    
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($agenda) {
            $agenda->slug = Str::slug($agenda->judul, '-');
        });

        static::updating(function ($agenda) {
            $agenda->slug = Str::slug($agenda->judul, '-');
        });
    }
}
