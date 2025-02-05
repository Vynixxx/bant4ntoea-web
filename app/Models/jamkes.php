<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jamkes extends Model
{
    use HasFactory;

    protected $table = 'jamkes';

    protected $fillable = [
        'nama',
        'acc',
        'jmlkp',
    ];
}
