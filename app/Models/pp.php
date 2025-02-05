<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pp extends Model
{
    use HasFactory;

    protected $table = 'pp';

    protected $fillable = [
        'usia',
        'lk',
        'pr',
    ];
}
