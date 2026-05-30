<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourInclusion extends Model
{
    protected $table = 'tour_inclusions';

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
