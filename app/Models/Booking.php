<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
     protected $fillable = [
        'name',
        'phone',
        'email',
        'pickup_location',
        'drop_location',
        'ride_date',
        'ride_time',
        'return_date',
        'return_time',
        'vehicle_type',
        'trip_type',   
        'note',
        'distance_km',
        'total_distance',
        'fare',
        'status',
        'booking_no',
    ];
}
