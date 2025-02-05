<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bsk extends Model
{
    use HasFactory;

    protected $table = 'bsm';

    protected $fillable = [
        'nama',
        'jml',
    ];
}
