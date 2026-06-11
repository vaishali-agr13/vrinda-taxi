<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TourPackage;
use App\Models\TourItinerary;
use App\Models\TourInclusion;
use App\Models\TourExclusion;

class TourPackageController extends Controller
{

    // ================= LIST PAGE =================

    public function index()
    {
        $packages = TourPackage::latest()->get();

        return view('admin.tour-packages.index', compact('packages'));
    }


    // ================= CREATE PAGE =================

    public function create()
    {
        return view('admin.tour-packages.create');
    }


    // ================= STORE DATA =================

    public function store(Request $request)
    {

        // ================= VALIDATION =================

        $request->validate([

            'title' => 'required',

        ]);


        // ================= SAVE PACKAGE =================

        $package = new TourPackage();

        $package->title = $request->title;

        $package->duration = $request->duration;

        $package->location = $request->location;


        // ================= IMAGE UPLOAD =================

        if($request->hasFile('banner_image'))
        {
            $image = time().'_banner_image'.'.'.$request->banner_image->extension();

            $request->banner_image->move(
                public_path('uploads/tours'),
                $image
            );

            $package->banner_image = $image;
        }


        if($request->hasFile('featured_image'))
        {
            $image = time().'_featured_image'.'.'.$request->featured_image->extension();

            $request->featured_image->move(
                public_path('uploads/tours'),
                $image
            );

            $package->featured_image = $image;
        }

        $package->save();


        // ================= SAVE ITINERARIES =================

        if($request->itinerary_title)
        {
            foreach($request->itinerary_title as $key => $title)
            {

                TourItinerary::create([

                    'tour_package_id' => $package->id,

                    'day_number' => $request->day_number[$key],

                    'title' => $title,

                    'description' => $request->itinerary_description[$key]

                ]);

            }
        }


        // ================= SAVE INCLUSIONS =================

        if($request->inclusions)
        {
            foreach($request->inclusions as $item)
            {

                if($item != null)
                {
                    TourInclusion::create([

                        'tour_package_id' => $package->id,

                        'item' => $item

                    ]);
                }

            }
        }


        // ================= SAVE EXCLUSIONS =================

        if($request->exclusions)
        {
            foreach($request->exclusions as $item)
            {

                if($item != null)
                {
                    TourExclusion::create([

                        'tour_package_id' => $package->id,

                        'item' => $item

                    ]);
                }

            }
        }


        // ================= REDIRECT =================

        return redirect()
            ->route('tour-packages.index')
            ->with('success', 'Tour Package Added Successfully');

    }

    public function show($id)
    {

        if (!is_numeric($id)) {
            return  redirect()->back()->with('error', 'Invalid tour package ID.');
        }

        $tourPackages = TourPackage::get();

        $tour = TourPackage::find($id);
        if($tour){
                   $itineraries = TourItinerary::where('tour_package_id', $id)->get();

                    $inclusions = TourInclusion::where('tour_package_id', $id)->get();

                    $exclusions = TourExclusion::where('tour_package_id', $id)->get();

                    return view('front-end.tour-details', compact(
                                                        'tourPackages',
                                                        'tour',
                                                        'itineraries',
                                                        'inclusions',
                                                        'exclusions'
                    ));
        }
        else {
               return  redirect()->back()->with('error', 'Invalid tour package ID.');
        }

        
    }

    public function tourBooking(){

    }
    
    public function edit($id)
    {

        if(!is_numeric($id))
        {
            return redirect()
                    ->route('tour-packages.index')
                    ->with('error', 'Invalid Tour Package ID');
        }

        $tour = TourPackage::find($id);

        if(!$tour)
        {
            return redirect()
                    ->route('tour-packages.index')
                    ->with('error', 'Tour Package Not Found');
        }

        $itineraries = TourItinerary::where('tour_package_id', $id)->get();

        $inclusions = TourInclusion::where('tour_package_id', $id)->get();

        $exclusions = TourExclusion::where('tour_package_id', $id)->get();

        return view('admin.tour-packages.edit', compact(
            'tour',
            'itineraries',
            'inclusions',
            'exclusions'
        ));
    }

    public function update(Request $request, $id)
    {

        $tour = TourPackage::find($id);

        if(!$tour)
        {
            return redirect()
                    ->route('tour-packages.index')
                    ->with('error', 'Tour Package Not Found');
        }


        // ================= BANNER IMAGE =================

        if($request->hasFile('banner_image'))
        {

            $file = $request->file('banner_image');

            $bannerImage = time().'_banner_image'.'.'.$request->banner_image->extension();

            $file->move(public_path('uploads/tours'), $bannerImage);

            $tour->banner_image = $bannerImage;
        }


        // ================= FEATURED IMAGE =================

        if($request->hasFile('featured_image'))
        {

            $file = $request->file('featured_image');

            $featuredImage = time().'_featured_image'.'.'.$request->featured_image->extension();

            $file->move(public_path('uploads/tours'), $featuredImage);

            $tour->featured_image = $featuredImage;
        }



        // ================= UPDATE PACKAGE =================

        $tour->title = $request->title;
        $tour->duration = $request->duration;
        $tour->location = $request->location;

        $tour->save();


        // ================= DELETE OLD DATA =================

        TourItinerary::where('tour_package_id', $id)->delete();

        TourInclusion::where('tour_package_id', $id)->delete();

        TourExclusion::where('tour_package_id', $id)->delete();


        // ================= SAVE NEW ITINERARY =================

        if($request->day_number)
        {

            foreach($request->day_number as $key => $day)
            {

                if(!empty($day))
                {

                    TourItinerary::create([

                        'tour_package_id' => $tour->id,
                        'day_number'      => $day,
                        'title'           => $request->itinerary_title[$key],
                        'description'     => $request->itinerary_description[$key],

                    ]);

                }

            }

        }


        // ================= SAVE NEW INCLUSIONS =================

        if($request->inclusions)
        {

            foreach($request->inclusions as $inclusion)
            {

                if(!empty($inclusion))
                {

                    TourInclusion::create([

                        'tour_package_id' => $tour->id,
                        'item'           => $inclusion,

                    ]);

                }

            }

        }


        // ================= SAVE NEW EXCLUSIONS =================

        if($request->exclusions)
        {

            foreach($request->exclusions as $exclusion)
            {

                if(!empty($exclusion))
                {

                    TourExclusion::create([

                        'tour_package_id' => $tour->id,
                        'item'        => $exclusion,

                    ]);

                }

            }

        }


        return redirect()
                ->route('tour-packages.index')
                ->with('success', 'Tour Package Updated Successfully');

    }
    
 public function destroy($id)
    {
        $tour = TourPackage::find($id);

        if(!$tour)
        {
            return redirect()
                ->route('tour-packages.index')
                ->with('error', 'Tour Package Not Found');
        }

        // ✅ Delete related data first
        TourItinerary::where('tour_package_id', $id)->delete();
        TourInclusion::where('tour_package_id', $id)->delete();
        TourExclusion::where('tour_package_id', $id)->delete();

        // (optional) delete images from storage
        if($tour->banner_image && file_exists(public_path($tour->banner_image))){
            unlink(public_path($tour->banner_image));
        }

        if($tour->featured_image && file_exists(public_path($tour->featured_image))){
            unlink(public_path($tour->featured_image));
        }

        // ✅ Delete main package
        $tour->delete();

        return redirect()
            ->route('tour-packages.index')
            ->with('success', 'Tour Package Deleted Successfully');
    }

 

}