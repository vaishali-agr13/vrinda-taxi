<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
         public function index()
            {
               
                $bookings = Booking::latest()->get();

                return view('admin.bookings.index', compact('bookings'));
            }

        public function calculate(Request $request)
        {
            $request->validate([
                'name'=>'required',

                'trip_type' => 'required',
                'pickup_location' => 'required',
                'drop_location' => 'required',
                'ride_date' => 'required',
                'distance_km' => 'required'
            ]);

            $distance = (float) $request->distance_km;
            $trip = $request->trip_type;

            // Pricing logic
            if ($trip == "one_way") {
                $rate = 12;
                $totalDistance = $distance;
            } elseif ($trip == "round_trip") {
                $rate = 10;
                $totalDistance = $distance * 2;
            } else { // local
                $rate = 500;
                $totalDistance = 0;
            }

            $fare = ($trip == "local")
                ? $rate
                : $totalDistance * $rate;

            if ($fare < 300) {
                $fare = 300;
            }

            $booking_no =  $this->generateBookingNumber();
            // 🔥 SAVE IN DATABASE
            $booking = Booking::create([
                'booking_no' =>$booking_no,
                'trip_type' => $trip,
                'name'=>$request->name,
                'phone'=>$request->phone,
                'pickup_location'=>$request->pickup_location,
                'drop_location' => $request->drop_location,
                'ride_date' => $request->ride_date,
                'return_date' => $request->return_date,
                'distance_km' => $distance,
                'total_distance' => $totalDistance,
                'fare' => $fare,
            ]);

            // optional: pass ID to next page
            return redirect()->route('booking.success', $booking->id);
        }

        private function generateBookingNumber()
            {
                do {

                    $bookingNo = 'VT' . date('Ymd') . rand(1000, 9999);

                } while (Booking::where('booking_no', $bookingNo)->exists());

                return $bookingNo;
            }

    public function success($id)
        {
            $booking = Booking::find($id);

            return view('front-end.success', compact('booking'));

        }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.bookings.view_detail', compact('booking'));
    }

    // STATUS UPDATE
    public function statusUpdate(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->status = $request->status;

        $booking->save();

        return back()->with('success', 'Status Updated');
    }
}