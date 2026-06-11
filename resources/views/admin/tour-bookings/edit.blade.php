@extends('admin.layouts.master')

@section('title', 'Edit Tour Booking')

@section('page_header')

<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Edit Tour Booking</h1>
    </div>

    <div class="col-sm-6">
        <div class="float-sm-right">
            <a href="{{ route('tour-bookings.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</div>

@endsection

@section('content')

 <form action="{{ route('tour-bookings.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Customer Information -->

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Customer Information
                        </h3>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-3">
                                <label>Enquiry Date</label>
                                <input type="date"
                                value="{{ old('enquiry_date', $booking->enquiry_date) }}"
                                       name="enquiry_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Client Name</label>
                                <input type="text"
                                       name="client_name"
                                       class="form-control"
                                       value="{{ old('client_name', $booking->client_name) }}"
                                       required>
                            </div>

                            <div class="col-md-3">
                                <label>Contact Number</label>
                                <input type="text"
                                value="{{ old('contact_number', $booking->contact_number) }}"
                                       name="contact_number"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Client City</label>
                                <input type="text"
                                       name="client_city"
                                       value="{{ old('client_city', $booking->client_city) }}"
                                       class="form-control">
                            </div>

                            <div class="col-md-12 mt-3">
                                <label>Package Details</label>
                                <textarea name="package_details"
                                          rows="3"
                                          class="form-control">
                                        
                                        {{ old('package_details', $booking->package_details) }}
                                </textarea>
                            </div>

                        </div>

                    </div>
                </div>


                <!-- Trip Information -->

                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">
                            Trip Information
                        </h3>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-3">
                                <label>Trip Start Date</label>
                                <input type="date"
                                value="{{ old('trip_start_date', $booking->trip_start_date) }}"
                                       name="trip_start_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Trip End Date</label>
                                <input type="date"
                                value="{{ old('trip_end_date', $booking->trip_end_date) }}"
                                       name="trip_end_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Pickup Location</label>
                                <input type="text"
                                value="{{ old('pickup_location', $booking->pickup_location) }}"
                                       name="pickup_location"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Pickup Time</label>
                                <input type="time"
                                value="{{ old('pickup_time', $booking->pickup_time) }}"
                                       name="pickup_time"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Drop Location</label>
                                <input type="text"
                                value="{{ old('drop_location', $booking->drop_location) }}"
                                       name="drop_location"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Drop Time</label>
                                <input type="time"
                                       name="drop_time"
                                       value="{{ old('drop_time', $booking->drop_time) }}"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>No Of Adults</label>
                                <input type="number"
                                value="{{ old('no_of_adults', $booking->no_of_adults) }}"
                                       name="no_of_adults"
                                       value="1"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Booking Status</label>
                                <select name="booking_status" class="form-control">

                                    <option value="Pending"
                                        {{ $booking->booking_status == 'Pending' ? 'selected' : '' }}>
                                        Pending
                                    </option>

                                    <option value="Confirmed"
                                        {{ $booking->booking_status == 'Confirmed' ? 'selected' : '' }}>
                                        Confirmed
                                    </option>

                                    <option value="In Progress"
                                        {{ $booking->booking_status == 'In Progress' ? 'selected' : '' }}>
                                        In Progress
                                    </option>

                                    <option value="Completed"
                                        {{ $booking->booking_status == 'Completed' ? 'selected' : '' }}>
                                        Completed
                                    </option>

                                    <option value="Cancelled"
                                        {{ $booking->booking_status == 'Cancelled' ? 'selected' : '' }}>
                                        Cancelled
                                    </option>

                                </select>
                            </div>

                        </div>

                    </div>
                </div>


                <!-- Vehicle Information -->

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Vehicle Information
                        </h3>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-3">
                                <label>Car Type</label>
                                <input type="text"
                                value="{{ old('car_type', $booking->car_type) }}"

                                       name="car_type"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Car Charges Per Day</label>
                                <input type="number"
                                value="{{ old('car_charges_per_day', $booking->car_charges_per_day) }}"

                                       name="car_charges_per_day"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Car Number</label>
                                <input type="text"
                                value="{{ old('car_number', $booking->car_number) }}"

                                       name="car_number"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Driver Name</label>
                                <input type="text"
                                value="{{ old('driver_name', $booking->driver_name) }}"

                                       name="driver_name"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Driver Contact</label>
                                <input type="text"
                                value="{{ old('driver_contact', $booking->driver_contact) }}"
                                       name="driver_contact"
                                       class="form-control">
                            </div>

                        </div>

                    </div>
                </div>


                <!-- Hotel Information -->

                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">
                            Hotel Information
                        </h3>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-4">
                                <label>Room Type</label>

                                <select name="hotel_room_type" class="form-control">
                                    <option value="Single Bed" {{ $booking->hotel_room_type=='Single Bed' ? 'selected' : '' }}>Single Bed</option>
                                    <option value="Double Bed" {{ $booking->hotel_room_type=='Double Bed' ? 'selected' : '' }}>Double Bed</option>
                                    <option value="Triple Bed" {{ $booking->hotel_room_type=='Triple Bed' ? 'selected' : '' }}>Triple Bed</option>
                                    <option value="Four Bed" {{ $booking->hotel_room_type=='Four Bed' ? 'selected' : '' }}>Four Bed</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>Hotel Charges</label>

                                <input type="number"
                                value="{{ old('hotel_charges', $booking->hotel_charges) }}"
                                       name="hotel_charges"
                                       class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Guide Service</label>

                                <select name="guide_service" class="form-control">
                                        <option value="No" {{ $booking->guide_service=='No' ? 'selected' : '' }}>No</option>
                                        <option value="Yes" {{ $booking->guide_service=='Yes' ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="col-md-4 mt-3">
                                <label>Guide Charges</label>

                                <input type="number"
                                value="{{ old('guide_charges', $booking->guide_charges) }}"
                                       name="guide_charges"
                                       class="form-control">
                            </div>

                        </div>

                    </div>
                </div>


                <!-- Payment Information -->

                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">
                            Payment Information
                        </h3>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-4">
                                <label>Total Amount</label>
                                <input type="number"
                                value="{{ old('total_amount', $booking->total_amount) }}"
                                       id="total_amount"
                                       name="total_amount"
                                       class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Advance Payment</label>
                                <input type="number"
                                       id="advance_payment"
                                       value="{{ old('advance_payment_received', $booking->advance_payment_received) }}"
                                       name="advance_payment_received"
                                       class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Balance Amount</label>
                                <input type="number"
                                value="{{ old('total_balance_amount', $booking->total_balance_amount) }}"
                                       id="balance_amount"
                                       name="total_balance_amount"
                                       readonly
                                       class="form-control">
                            </div>

                        </div>

                    </div>
                </div>


                <!-- Followup -->

                <div class="card card-secondary">

                    <div class="card-header">
                        <h3 class="card-title">Follow Up Details</h3>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-3">
                                <label>1st Follow Up</label>
                                <input type="date"
                                        name="first_followup_date"
                                        value="{{ old('first_followup_date', $booking->first_followup_date) }}"
                                        class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>2nd Follow Up</label>
                                <input type="date"
                                        name="second_followup_date"
                                        value="{{ old('second_followup_date', $booking->second_followup_date) }}"
                                        class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Last Follow Up</label>
                                <input type="date"
                                        name="last_followup_date"
                                        value="{{ old('last_followup_date', $booking->last_followup_date) }}"
                                        class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Review</label>
                                <select name="review" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" {{ $booking->review=='Yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="No" {{ $booking->review=='No' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label>Remarks</label>
                                <textarea name="remarks"
                                            rows="4"
                                            class="form-control">{{ old('remarks', $booking->remarks) }}</textarea>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="card">
                    <div class="card-footer">

                         <button type="submit" class="btn btn-primary">
                           <i class="fas fa-save"></i> Update Booking
                         </button>

                        <a href="{{ route('tour-bookings.index') }}"
                           class="btn btn-secondary">
                            Cancel
                        </a>

                    </div>
                </div>

            </form>

@endsection

@section('scripts')

<script>

$('#total_amount, #advance_payment').on('keyup change', function(){

    let total = parseFloat($('#total_amount').val()) || 0;
    let advance = parseFloat($('#advance_payment').val()) || 0;

    $('#balance_amount').val(total - advance);

});

</script>

@endsection