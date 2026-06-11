@extends('admin.layouts.master')

@section('title', 'Tour Bookings')

@section('page_header')

<div class="row mb-2">

    <div class="col-sm-6">
        <h1>Tour Bookings</h1>
    </div>

    <div class="col-sm-6">
        <div class="float-sm-right">
            <a href="{{ route('tour-bookings.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Booking
            </a>
        </div>
    </div>

</div>

@endsection


@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>

    {{ session('success') }}
</div>
@endif

<div class="card">

    <div class="card-header">
        
        <h3 class="card-title">
            <i class="fas fa-suitcase mr-2"></i>
            Booking List
        </h3>

        <div class="card-tools">
            <a href="{{ route('tour-bookings.pdf') }}" class="btn btn-danger btn-sm">
                <i class="fas fa-file-pdf"></i> Download All Bookings PDF
            </a>
        </div>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table id="bookingTable" class="table table-bordered table-hover table-striped">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Contact</th>
                        <th>City</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Total Amount</th>
                        <th>Balance</th>
                        <th width="180">Action</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($bookings as $booking)

                    <tr>

                        <td>{{ $booking->id }}</td>

                        <td>{{ $booking->client_name }}</td>

                        <td>{{ $booking->contact_number }}</td>

                        <td>{{ $booking->client_city }}</td>

                        <td>{{ $booking->trip_start_date }}</td>

                        <td>{{ $booking->trip_end_date }}</td>

                        <td>

                            @if($booking->booking_status == 'Confirmed')
                                <span class="badge badge-success">
                                    Confirmed
                                </span>

                            @elseif($booking->booking_status == 'Pending')
                                <span class="badge badge-warning">
                                    Pending
                                </span>

                            @elseif($booking->booking_status == 'Cancelled')
                                <span class="badge badge-danger">
                                    Cancelled
                                </span>

                            @else
                                <span class="badge badge-info">
                                    {{ $booking->booking_status }}
                                </span>
                            @endif

                        </td>

                        <td>
                            ₹ {{ number_format($booking->total_amount ?? 0, 2) }}
                        </td>

                        <td>
                            ₹ {{ number_format($booking->total_balance_amount ?? 0, 2) }}
                        </td>

                        <td>

                            <!-- <a href="{{ route('tour-bookings.show', $booking->id) }}"
                               class="btn btn-info btn-sm"
                               title="View">

                                <i class="fas fa-eye"></i>

                            </a> -->

                            <a href="{{ route('tour-bookings.edit', $booking->id) }}"
                               class="btn btn-warning btn-sm"
                               title="Edit">

                                <i class="fas fa-edit"></i>

                            </a>

                            <form action="{{ route('tour-bookings.destroy', $booking->id) }}"
                                  method="POST"
                                  style="display:inline-block">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        title="Delete"
                                        onclick="return confirm('Are you sure you want to delete this booking?')">

                                    <i class="fas fa-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="10" class="text-center">
                            No Bookings Found
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection


@section('scripts')

<script>
$(document).ready(function () {

    if ($.fn.DataTable) {

        $('#bookingTable').DataTable({
            responsive: true,
            autoWidth: false,
            pageLength: 10
        });

    }

});
</script>

@endsection