<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class buruh extends Model
{
    use HasFactory;

    protected $table = 'buruh';

    protected $fillable = [
        'nama',
        'jml',
    ];
}
