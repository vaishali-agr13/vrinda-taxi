<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    

class TourPackage extends Model
{
    protected $table = 'tour_packages';

    protected $fillable = [
        'title',
        'duration',
        'location',
        'banner_image',
        'featured_image'
    ];

    // ================= RELATIONS =================

    public function itineraries()
    {
        return $this->hasMany(TourItinerary::class, 'tour_package_id');
    }

    public function inclusions()
    {
        return $this->hasMany(TourInclusion::class, 'tour_package_id');
    }

    public function exclusions()
    {
        return $this->hasMany(TourExclusion::class, 'tour_package_id');
    }
}