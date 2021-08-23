<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Btn extends Model
{
    use HasFactory;

    protected $fillable = [

        'sistema',
        'libreria',
        'paquetes',
        'daq',
        'snort',
        'red',
        'prequisitos',
        
    ];
}