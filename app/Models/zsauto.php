<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zsauto extends Model
{
    use HasFactory;

    protected $primaryKey = 'rendszam';

    protected $fillable =  [
        'marka',
        'tipus',
        'szin',
        'fogyaszt',
        'ar'
    ];
}
