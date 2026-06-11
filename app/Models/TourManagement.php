<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourManagement extends Model
{
        protected $fillable = [

            'enquiry_date',
            'client_name',
            'contact_number',
            'client_city',
            'package_details',
            'trip_start_date',
            'trip_end_date',
            'pickup_location',
            'pickup_time',
            'drop_location',
            'drop_time',
            'no_of_adults',
            'car_type',
            'car_charges_per_day',
            'car_number',
            'driver_name',
            'driver_contact',
            'hotel_room_type',
            'hotel_charges',
            'guide_service',
            'guide_charges',
            'advance_payment_received',
            'total_balance_amount',
            'first_followup_date',
            'second_followup_date',
            'last_followup_date',
            'review',
            'total_amount',
            'booking_status',
            'remarks'

        ];
}
