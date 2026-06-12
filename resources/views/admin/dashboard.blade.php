@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">

    <div class="row mb-4">
        <div class="col-md-12">
            <h3>Dashboard</h3>
        </div>
    </div>

    <div class="row">

       <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-primary text-white shadow h-100">
                <div class="card-body">
                    <h6>Total Bookings</h6>
                    <h3>{{ $totalBookings }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning text-dark shadow h-100">
                <div class="card-body">
                    <h6>Pending Bookings</h6>
                    <h3>{{ $pendingBookings }}</h3>
                </div>
            </div>
        </div>

       <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-success text-white shadow h-100">
                <div class="card-body">
                    <h6>Confirmed Bookings</h6>
                    <h3>{{ $confirmedBookings }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-danger text-white shadow h-100">
                <div class="card-body">
                    <h6>Cancelled Bookings</h6>
                    <h3>{{ $cancelledBookings }}</h3>
                </div>
            </div>
        </div>

    </div>

   <div class="row">

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card bg-info text-white shadow h-100">
                <div class="card-body">
                    <h6>Total Enquiries</h6>
                    <h3>{{ $totalContacts }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card bg-secondary text-white shadow h-100">
                <div class="card-body">
                    <h6>Total Packages</h6>
                    <h3>{{ $totalPackages }}</h3>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow">
        <div class="card-header">
            <h5>Recent Bookings</h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Booking No</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Trip Type</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($recentBookings as $booking)
                    <tr>
                        <td>{{ $booking->booking_no }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ ucfirst($booking->trip_type) }}</td>
                        <td>
                            <span class="badge bg-success">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </td>
                        <td>{{ $booking->created_at->format('d M Y') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            No Record Found
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection