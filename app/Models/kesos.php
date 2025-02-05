<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kesos extends Model
{
    use HasFactory;

    protected $table = 'kesos';

    protected $fillable = [
        'nama',
        'jml',
    ];
}
