<!DOCTYPE html>
<html>
<head>
    <title>Booking {{ $booking->status }}</title>
</head>
<body>
    <h2>Your Booking Has Been {{ $booking->status }}</h2>

    <p>Dear {{ $booking->name }},</p>

    <p>Thank you for choosing us. Your booking has been {{ $booking->status }}.</p>

    <p><strong>Booking Details:</strong></p>

    <ul>
        <li>Booking ID: {{ $booking->id }}</li>
        <li>Booking Number: {{ $booking->booking_no }}</li>
        <li>Pickup: {{ $booking->pickup_location }}</li>
        <li>Drop: {{ $booking->drop_location }}</li>
        <li>Trip Type : {{ $booking->trip_type }}</li>
        <li>Ride Date: {{ $booking->ride_date }}</li>
        <li>Ride Time: {{ $booking->ride_time }}</li>
        <li>Return Date: {{ $booking->return_date }}</li>
        <li>Return Time: {{ $booking->return_time }}</li>
        <li>Status: {{ $booking->status }}</li>
    </ul>

    <p>We look forward to serving you.</p>

    <p>Regards,<br>Vrinda Taxi Service</p>
</body>
</html>