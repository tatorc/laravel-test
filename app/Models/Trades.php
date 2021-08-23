<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trades extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'user_id',
        'symbol',
        'shares',
        'price',
    ];

    protected $returnable = [
        'id',
        'type',
        'user_id',
        'symbol',
        'shares',
        'price',
        'timestamp',
    ];
}

