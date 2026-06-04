<head>
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/all-fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}" />
</head>

<body>


    <!--===== header ==========-->
@include('front-end.layouts.header')
<div class="container py-5">

    <div class="card shadow border-0">

        <div class="card-body text-center">

            <h2 class="text-success mb-3">
                Booking Successful
            </h2>

            <p>
                Thank you! Your ride booking request has been received.
            </p>

            <hr>

            <h5>Booking Details</h5>

            <p><strong>Booking ID:</strong> {{ $booking->booking_no }}</p>

            <p><strong>Pickup:</strong> {{ $booking->pickup_location }}</p>

            <p><strong>Drop:</strong> {{ $booking->drop_location }}</p>

            <p><strong>Trip Type:</strong> {{ $booking->trip_type }}</p>

            <p><strong>Total Fare:</strong> {{ $booking->fare }} Rs.</p>

            <p><strong>Status:</strong>
                <span class="badge bg-warning">
                    Pending
                </span>
            </p>

            <a href="tel:+919999999999" class="btn theme-btn">
                Call Support
            </a>

            <a href="{{ route('booking.whatsapp', $booking->id) }}" class="btn theme-btn">
               Send on WhatsApp
            </a>

        </div>

    </div>

</div>
@include('front-end.layouts.footer')

