

@extends('admin.layouts.master')

@section('title', 'Booking List')

@section('content')

<div class="card card-outline card-primary shadow-sm">

    <div class="card-header border-0">

        <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>
                <h3 class="card-title font-weight-bold">
                    <i class="fas fa-car-side mr-2 text-primary"></i>
                    Booking List
                </h3>

                <p class="text-muted mb-0 mt-1" style="font-size: 13px;">
                    Manage all taxi ride bookings
                </p>
            </div>

            <div class="card-tools">

                <form action="" method="GET">

                    <div class="input-group input-group-sm" style="width: 260px;">

                        <input type="text"
                               name="search"
                               value="{{ request('search') }}"
                               class="form-control"
                               placeholder="Search booking...">

                        <div class="input-group-append">

                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>

                            <a href="{{ url()->current() }}"
                               class="btn btn-default">
                                <i class="fas fa-sync-alt"></i>
                            </a>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover table-striped mb-0">

                <thead class="bg-light">

                    <tr>
                        <th width="70">#ID</th>
                        <th>Booking</th>
                        <th>Customer</th>
                        <th>Trip Details</th>
                        <th>Fare</th>
                        <th>Status</th>
                        <th width="140" class="text-center">Action</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($bookings as $booking)

                        <tr>

                            <td>
                                <span class="font-weight-bold text-dark">
                                    #{{ $booking->id }}
                                </span>
                            </td>

                            <td>

                                <div class="d-flex flex-column">

                                    <span class="badge badge-dark px-3 py-2 mb-1">
                                        {{ $booking->booking_no }}
                                    </span>

                                    <small class="text-muted">
                                        <i class="far fa-calendar-alt"></i>

                                        {{ \Carbon\Carbon::parse($booking->created_at)->format('d M Y') }}
                                    </small>

                                </div>

                            </td>

                            <td>

                                <div>

                                    <div class="font-weight-bold text-dark">
                                        {{ $booking->name }}
                                    </div>

                                    <small class="text-muted d-block mt-1">
                                        <i class="fas fa-phone-alt mr-1"></i>
                                        {{ $booking->phone }}
                                    </small>

                                    @if(!empty($booking->email))

                                        <small class="text-muted d-block">
                                            <i class="fas fa-envelope mr-1"></i>
                                            {{ $booking->email }}
                                        </small>

                                    @endif

                                </div>

                            </td>

                            <td>

                                <div class="trip-route">

                                    <div class="mb-2">

                                        <small class="text-success font-weight-bold">
                                            <i class="fas fa-map-marker-alt mr-1"></i>
                                            PICKUP
                                        </small>

                                        <div class="text-dark">
                                            {{ $booking->pickup_location }}
                                        </div>

                                    </div>

                                    <div class="text-center text-muted">
                                        <i class="fas fa-arrow-down"></i>
                                    </div>

                                    <div class="mt-2">

                                        <small class="text-danger font-weight-bold">
                                            <i class="fas fa-map-marker-alt mr-1"></i>
                                            DROP
                                        </small>

                                        <div class="text-dark">
                                            {{ $booking->drop_location }}
                                        </div>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="font-weight-bold text-success" style="font-size: 16px;">
                                    ₹{{ number_format($booking->fare) }}
                                </div>

                                @if(!empty($booking->trip_type))

                                    <small class="badge badge-info mt-1">
                                        {{ ucfirst($booking->trip_type) }}
                                    </small>

                                @endif

                            </td>

                            <td>

                                @if($booking->status == 'pending')

                                    <span class="badge badge-warning px-3 py-2">
                                        <i class="fas fa-clock mr-1"></i>
                                        Pending
                                    </span>

                                @elseif($booking->status == 'confirmed')

                                    <span class="badge badge-primary px-3 py-2">
                                        <i class="fas fa-check mr-1"></i>
                                        Confirmed
                                    </span>

                                @elseif($booking->status == 'completed')

                                    <span class="badge badge-success px-3 py-2">
                                        <i class="fas fa-check-circle mr-1"></i>
                                        Completed
                                    </span>

                                @elseif($booking->status == 'cancelled')

                                    <span class="badge badge-danger px-3 py-2">
                                        <i class="fas fa-times-circle mr-1"></i>
                                        Cancelled
                                    </span>

                                @else

                                    <span class="badge badge-secondary px-3 py-2">
                                        {{ ucfirst($booking->status) }}
                                    </span>

                                @endif

                            </td>

                            <td class="text-center">

                                <div class="btn-group">

                                    <a href="{{ route('admin.bookings.show', $booking->id) }}"
                                       class="btn btn-sm btn-primary">

                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href=""
                                       class="btn btn-sm btn-info">

                                        <i class="fas fa-edit"></i>
                                    </a>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="text-center py-5">

                                <img src="https://cdn-icons-png.flaticon.com/512/7486/7486740.png"
                                     width="90"
                                     class="mb-3">

                                <h5 class="text-muted">
                                    No Bookings Found
                                </h5>

                                <p class="text-muted mb-0">
                                    New booking records will appear here.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

    <div class="card-footer bg-white clearfix">

        <div class="float-left text-muted pt-2">
            Total Bookings :
            <strong>{{ $bookings->count() }}</strong>
        </div>

        <div class="float-right">


        </div>

    </div>

</div>

@endsection