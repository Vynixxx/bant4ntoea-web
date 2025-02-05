<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gb extends Model
{
    use HasFactory;

    protected $table = 'gb';

    protected $fillable = [
        'usia',
        'lk',
        'pr',
    ];
}
