<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agama extends Model
{
    use HasFactory;

    protected $table = 'agama';

    protected $fillable = [
        'nama',
        'lk',
        'pr',
    ];
}
