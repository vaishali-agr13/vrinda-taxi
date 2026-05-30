<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourItinerary extends Model
{
    protected $table = 'tour_itineraries';

    protected $fillable = [
        'tour_package_id',
        'day_number',
        'title',
        'description'
    ];

    // ================= RELATION =================

    public function package()
    {
        return $this->belongsTo(TourPackage::class, 'tour_package_id');
    }

}
