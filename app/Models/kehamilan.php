<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kehamilan extends Model
{
    use HasFactory;

    protected $table = 'kehamilan';

    protected $fillable = [
        'nama',
        'jml',
    ];
}
