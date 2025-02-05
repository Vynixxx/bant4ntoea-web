<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sk extends Model
{
    use HasFactory;

    protected $table = 'sk';

    protected $fillable = [
        'nama',
        'lk',
        'pr',
    ];
}
