@extends('admin.layouts.master')

@section('title', 'Booking Details')

@section('content')

<div class="row">

    <!-- Booking Details -->
    <div class="col-md-8">

        <div class="card card-primary card-outline shadow-sm">

            <div class="card-header">

                <h3 class="card-title">
                    <i class="fas fa-car-side mr-2"></i>
                    Booking Details
                </h3>

                <div class="card-tools">

                    <span class="badge badge-dark px-3 py-2">
                        {{ $booking->booking_no }}
                    </span>

                </div>

            </div>

            <div class="card-body">

                <div class="row">

                    <!-- Customer Info -->
                    <div class="col-md-6">

                        <div class="info-box bg-light">

                            <span class="info-box-icon bg-primary elevation-1">
                                <i class="fas fa-user"></i>
                            </span>

                            <div class="info-box-content">

                                <span class="info-box-text">
                                    Customer Name
                                </span>

                                <span class="info-box-number">
                                    {{ $booking->name }}
                                </span>

                            </div>

                        </div>

                    </div>

                    <!-- Phone -->
                    <div class="col-md-6">

                        <div class="info-box bg-light">

                            <span class="info-box-icon bg-success elevation-1">
                                <i class="fas fa-phone-alt"></i>
                            </span>

                            <div class="info-box-content">

                                <span class="info-box-text">
                                    Contact Number
                                </span>

                                <span class="info-box-number">
                                    {{ $booking->phone }}
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <!-- Trip Type -->
                    <div class="col-md-4">

                        <div class="small-box bg-info">

                            <div class="inner">

                                <h4>{{ ucfirst($booking->trip_type) }}</h4>

                                <p>Trip Type</p>

                            </div>

                            <div class="icon">
                                <i class="fas fa-route"></i>
                            </div>

                        </div>

                    </div>

                    <!-- Distance -->
                    <div class="col-md-4">

                        <div class="small-box bg-warning">

                            <div class="inner">

                                <h4>{{ $booking->distance_km }} KM</h4>

                                <p>Total Distance</p>

                            </div>

                            <div class="icon">
                                <i class="fas fa-road"></i>
                            </div>

                        </div>

                    </div>

                    <!-- Fare -->
                    <div class="col-md-4">

                        <div class="small-box bg-success">

                            <div class="inner">

                                <h4>₹{{ number_format($booking->fare) }}</h4>

                                <p>Total Fare</p>

                            </div>

                            <div class="icon">
                                <i class="fas fa-rupee-sign"></i>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Route Details -->
                <div class="card mt-3 border">

                    <div class="card-header bg-light">

                        <h5 class="mb-0">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Route Information
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="p-3 border rounded bg-light">

                                    <small class="text-success font-weight-bold">
                                        PICKUP LOCATION
                                    </small>

                                    <h6 class="mt-2 mb-0">
                                        {{ $booking->pickup_location }}
                                    </h6>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="p-3 border rounded bg-light">

                                    <small class="text-danger font-weight-bold">
                                        DROP LOCATION
                                    </small>

                                    <h6 class="mt-2 mb-0">
                                        {{ $booking->drop_location }}
                                    </h6>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Status Update -->
    <div class="col-md-4">

        <div class="card card-warning shadow-sm">

            <div class="card-header">

                <h3 class="card-title">

                    <i class="fas fa-edit mr-2"></i>
                    Update Status

                </h3>

            </div>

            <form method="POST"
                  action="{{ route('admin.bookings.status', $booking->id) }}">

                @csrf

                <div class="card-body">

                    <!-- Current Status -->
                    <div class="mb-4 text-center">
                        @if($booking->status == 'pending')

                            <span class="badge badge-warning px-4 py-2">
                                Pending
                            </span>

                        @elseif($booking->status == 'confirmed')

                            <span class="badge badge-primary px-4 py-2">
                                Confirmed
                            </span>

                        @elseif($booking->status == 'cancelled')

                            <span class="badge badge-info px-4 py-2">
                                Cancelled
                            </span>
                        @endif
                    </div>

                    <!-- Select Status -->
                    <div class="form-group">

                        <label>
                            Change Booking Status
                        </label>

                        <select name="status"
                                class="form-control">

                            <option value="pending"
                                {{ $booking->status == 'pending' ? 'selected' : '' }}>
                                Pending
                            </option>

                            <option value="confirmed"
                                {{ $booking->status == 'confirmed' ? 'selected' : '' }}>
                                Confirmed
                            </option>

                            <option value="cancelled"
                                {{ $booking->status == 'cancelled' ? 'selected' : '' }}>
                                Cancelled
                            </option>
                        </select>

                    </div>

                </div>

                <div class="card-footer">

                    <button type="submit"
                            class="btn btn-warning btn-block">

                        <i class="fas fa-save mr-1"></i>
                        Update Booking Status

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection