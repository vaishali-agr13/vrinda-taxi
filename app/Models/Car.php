<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_name',
        'slug',
        'car_image',
        'passengers',
        'bags',
        'ac_type',
        'fuel_type',
        'price_per_km',
        'base_fare',
        'car_model',
        'transmission_type',
        'description',
        'is_featured',
        'status',
        'sort_order'
    ];
}
