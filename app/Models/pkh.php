<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pkh extends Model
{
    use HasFactory;

    protected $table = 'pkh';

    protected $fillable = [
        'nama',
        'acc',
        'jmlkp',
    ];
}
