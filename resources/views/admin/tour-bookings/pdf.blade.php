<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>
body{
    font-family: DejaVu Sans, sans-serif;
    font-size:9px;
}

h2{
    text-align:center;
    margin-bottom:15px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border:1px solid #000;
    padding:4px;
    text-align:left;
}

th{
    font-weight:bold;
}
</style>
</head>
<body>

<h2>Tour Bookings Report</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Enquiry Date</th>
            <th>Client</th>
            <th>Contact</th>
            <th>City</th>
            <th>Package</th>
            <th>Trip Start</th>
            <th>Trip End</th>
            <th>Pickup</th>
            <th>Drop</th>
            <th>Adults</th>
            <th>Car Type</th>
            <th>Car Charges</th>
            <th>Car No.</th>
            <th>Driver</th>
            <th>Driver Contact</th>
            <th>Hotel Type</th>
            <th>Hotel Charges</th>
            <th>Guide</th>
            <th>Guide Charges</th>
            <th>Advance</th>
            <th>Balance</th>
            <th>1st Followup</th>
            <th>2nd Followup</th>
            <th>Last Followup</th>
            <th>Review</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>Remarks</th>
        </tr>
    </thead>

    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->enquiry_date }}</td>
            <td>{{ $booking->client_name }}</td>
            <td>{{ $booking->contact_number }}</td>
            <td>{{ $booking->client_city }}</td>
            <td>{{ $booking->package_details }}</td>
            <td>{{ $booking->trip_start_date }}</td>
            <td>{{ $booking->trip_end_date }}</td>
            <td>{{ $booking->pickup_location }}</td>
            <td>{{ $booking->drop_location }}</td>
            <td>{{ $booking->no_of_adults }}</td>
            <td>{{ $booking->car_type }}</td>
            <td>{{ $booking->car_charges_per_day }}</td>
            <td>{{ $booking->car_number }}</td>
            <td>{{ $booking->driver_name }}</td>
            <td>{{ $booking->driver_contact }}</td>
            <td>{{ $booking->hotel_room_type }}</td>
            <td>{{ $booking->hotel_charges }}</td>
            <td>{{ $booking->guide_service }}</td>
            <td>{{ $booking->guide_charges }}</td>
            <td>{{ $booking->advance_payment_received }}</td>
            <td>{{ $booking->total_balance_amount }}</td>
            <td>{{ $booking->first_followup_date }}</td>
            <td>{{ $booking->second_followup_date }}</td>
            <td>{{ $booking->last_followup_date }}</td>
            <td>{{ $booking->review }}</td>
            <td>{{ $booking->total_amount }}</td>
            <td>{{ $booking->booking_status }}</td>
            <td>{{ $booking->remarks }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>