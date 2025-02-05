<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan';

    protected $fillable = [
        'nama',
        'lk',
        'pr',
    ];
}
