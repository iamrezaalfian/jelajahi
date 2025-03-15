<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_number', 
        'departure_city', 
        'arrival_city', 
        'departure_date', 
        'arrival_date', 
        'price', 
        'available_seats'
    ];
}
