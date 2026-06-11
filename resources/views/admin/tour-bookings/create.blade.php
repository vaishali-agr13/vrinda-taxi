@extends('admin.layouts.master')

@section('title', 'Add Tour Booking')

@section('content')

 <form action="{{ route('tour-bookings.store') }}" method="POST">
                @csrf

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
                                       name="enquiry_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Client Name</label>
                                <input type="text"
                                       name="client_name"
                                       class="form-control"
                                       required>
                            </div>

                            <div class="col-md-3">
                                <label>Contact Number</label>
                                <input type="text"
                                       name="contact_number"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Client City</label>
                                <input type="text"
                                       name="client_city"
                                       class="form-control">
                            </div>

                            <div class="col-md-12 mt-3">
                                <label>Package Details</label>
                                <textarea name="package_details"
                                          rows="3"
                                          class="form-control"></textarea>
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
                                       name="trip_start_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Trip End Date</label>
                                <input type="date"
                                       name="trip_end_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Pickup Location</label>
                                <input type="text"
                                       name="pickup_location"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Pickup Time</label>
                                <input type="time"
                                       name="pickup_time"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Drop Location</label>
                                <input type="text"
                                       name="drop_location"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Drop Time</label>
                                <input type="time"
                                       name="drop_time"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>No Of Adults</label>
                                <input type="number"
                                       name="no_of_adults"
                                       value="1"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Booking Status</label>
                                <select name="booking_status"
                                        class="form-control">
                                    <option value="Pending">Pending</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Cancelled">Cancelled</option>
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
                                       name="car_type"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Car Charges Per Day</label>
                                <input type="number"
                                       name="car_charges_per_day"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Car Number</label>
                                <input type="text"
                                       name="car_number"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Driver Name</label>
                                <input type="text"
                                       name="driver_name"
                                       class="form-control">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Driver Contact</label>
                                <input type="text"
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

                                <select name="hotel_room_type"
                                        class="form-control">
                                    <option>Single Bed</option>
                                    <option>Double Bed</option>
                                    <option>Triple Bed</option>
                                    <option>Four Bed</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>Hotel Charges</label>

                                <input type="number"
                                       name="hotel_charges"
                                       class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Guide Service</label>

                                <select name="guide_service"
                                        class="form-control">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>

                            <div class="col-md-4 mt-3">
                                <label>Guide Charges</label>

                                <input type="number"
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
                                       id="total_amount"
                                       name="total_amount"
                                       class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Advance Payment</label>
                                <input type="number"
                                       id="advance_payment"
                                       name="advance_payment_received"
                                       class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Balance Amount</label>
                                <input type="number"
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
                        <h3 class="card-title">
                            Follow Up Details
                        </h3>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-3">
                                <label>1st Follow Up</label>
                                <input type="date"
                                       name="first_followup_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>2nd Follow Up</label>
                                <input type="date"
                                       name="second_followup_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Last Follow Up</label>
                                <input type="date"
                                       name="last_followup_date"
                                       class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Review</label>

                                <select name="review"
                                        class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label>Remarks</label>

                                <textarea name="remarks"
                                          rows="4"
                                          class="form-control"></textarea>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="card">
                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-success">
                            Save Booking
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