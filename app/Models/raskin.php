<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class raskin extends Model
{
    use HasFactory;

    protected $table = 'raskin';

    protected $fillable = [
        'nama',
        'jml',
    ];
}
