<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\TourPackage;
use Carbon\Carbon;
use App\Mail\BookingNotification;
use App\Mail\BookingConfirmedMail;
use Illuminate\Support\Facades\Mail;


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
                'email'=>'required',
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

            $rideDateTime = Carbon::parse($request->ride_date);
            $ride_date = $rideDateTime->format('Y-m-d'); // 2026-06-24
            $ride_time = $rideDateTime->format('H:i');   // 23:45
            $return_date = null;
            $return_time = null;
              
           if($request->return_date){
                $returnDateTime = Carbon::parse($request->return_date);
                $return_date = $returnDateTime->format('Y-m-d'); // 2026-06-24
                $return_time = $returnDateTime->format('H:i'); 
           }

            // 🔥 SAVE IN DATABASE
            $booking = Booking::create([
                'booking_no' =>$booking_no,
                'trip_type' => $trip,
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'pickup_location'=>$request->pickup_location,
                'drop_location' => $request->drop_location,
                'ride_date' => $ride_date,
                'ride_time' => $ride_time,
                'return_date' => $return_date,
                'return_time' => $return_time,
                'distance_km' => $distance,
                'total_distance' => $totalDistance,
                'fare' => $fare,
            ]);

            Mail::to('help@vrindataxiservice.com')->send(new BookingNotification($booking));
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
            $booking = Booking::findOrFail($id);
            $tourPackages = TourPackage::get();


            return view('front-end.success', compact('booking','tourPackages'));

        }

    public function show($id)
    {
        $booking = Booking::find($id);

        return view('admin.bookings.view_detail', compact('booking'));
    }

    // STATUS UPDATE
    public function statusUpdate(Request $request, $id)
    {
        $booking = Booking::find($id);

        $booking->status = $request->status;

        $booking->save();

        Mail::to($booking->email)->send(new BookingConfirmedMail($booking));

        return back()->with('success', 'Status Updated');
    }

    public function sendWhatsApp($id)
        {
            $booking = Booking::find($id);

            $phone = '919452667708'; // Admin/customer WhatsApp number

            $message = "🚖 New Booking Details\n\n";

            $message .= "Name: {$booking->name}\n";
            $message .= "Phone: {$booking->phone}\n";
            $message .= "Trip Type: {$booking->trip_type}\n";
            $message .= "Pickup: {$booking->pickup_location}\n";
            $message .= "Drop: {$booking->drop_location}\n";
            $message .= "Ride Date: {$booking->ride_date}\n";

            if ($booking->trip_type == 'round_trip') {
                $message .= "Return Date: {$booking->return_date}\n";
            }


            $url = "https://wa.me/".$phone."?text=".urlencode($message);

            return redirect($url);
        }
    public function edit($id)
        {
            $booking = Booking::findOrFail($id);

            return view('admin.bookings.edit', compact('booking'));
        }

   

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'trip_type' => 'required',
            'pickup_location' => 'required',
            'drop_location' => 'required',
            'ride_date' => 'required',
            'distance_km' => 'required'
        ]);

        $booking = Booking::findOrFail($id);

        $distance = (float) $request->distance_km;
        $trip = $request->trip_type;

        // Pricing Logic
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

        $rideDateTime = Carbon::parse($request->ride_date);

        $ride_date = $rideDateTime->format('Y-m-d');
        $ride_time = $rideDateTime->format('H:i');

        $return_date = null;
        $return_time = null;

        if ($request->return_date) {
            $returnDateTime = Carbon::parse($request->return_date);

            $return_date = $returnDateTime->format('Y-m-d');
            $return_time = $returnDateTime->format('H:i');
        }

        $booking->update([
            'trip_type' => $trip,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'pickup_location' => $request->pickup_location,
            'drop_location' => $request->drop_location,
            'ride_date' => $ride_date,
            'ride_time' => $ride_time,
            'return_date' => $return_date,
            'return_time' => $return_time,
            'distance_km' => $distance,
            'total_distance' => $totalDistance,
            'fare' => $fare,
            'status' => $request->status ?? $booking->status,
        ]);

        return redirect()
            ->route('admin.bookings')
            ->with('success', 'Booking updated successfully.');
    }
}