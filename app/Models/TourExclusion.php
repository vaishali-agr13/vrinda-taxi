<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourExclusion extends Model
{
    protected $table = 'tour_exclusions';

    protected $fillable = [
        'tour_package_id',
        'item'
    ];

    // ================= RELATION =================

    public function package()
    {
        return $this->belongsTo(TourPackage::class, 'tour_package_id');
    }
}