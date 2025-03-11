<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Engedélyezett mezők a tömeges kitöltéshez
    protected $fillable = ['name', 'email', 'review'];
}
