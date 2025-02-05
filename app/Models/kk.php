<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kk extends Model
{
    use HasFactory;

    protected $table = 'kk';

    protected $fillable = [
        'nama',
        'jml',
    ];
}
