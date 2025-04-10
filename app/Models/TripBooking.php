<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripBooking extends Model
{
    use HasFactory;

    protected $fillable = ['trip_id', 'name', 'email', 'start_date', 'end_date'];

    // Kapcsolat a Trip modellel
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
