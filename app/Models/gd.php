<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gd extends Model
{
    use HasFactory;

    protected $table = 'gd';

    protected $fillable = [
        'nama',
        'lk',
        'pr',
    ];
}
