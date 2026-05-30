<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\TourPackage;
use App\Models\TourItinerary;
use App\Models\TourInclusion;
use App\Models\TourExclusion;


class HomeController extends Controller
{
    public function index()
    {
        $tourPackages = TourPackage::get();

        $cars = Car::where('status',1)
            ->orderBy('sort_order')
            ->get();

        return view('front-end.index', compact('cars','tourPackages'));
    }
}
