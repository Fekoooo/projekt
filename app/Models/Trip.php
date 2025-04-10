<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'destination',
        'transport',
        'duration',
        'departure_date',
        'arrival_date',
        'price',
        'description',
        'rating',
        'image_url',
    ];
}

