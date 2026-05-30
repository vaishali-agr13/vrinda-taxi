@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
        @if(session('success'))
    <div class="alert alert-success flash-msg">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger flash-msg">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger flash-msg">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Car</h1>
                </div>

                <div class="col-sm-6 text-right">
                    <a href="{{ route('cars.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                
                <div class="card-header">
                    <h3 class="card-title">Car Details</h3>
                </div>

                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="row">

                            <!-- Car Name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Car Name</label>
                                    <input type="text"
                                           name="car_name"
                                           class="form-control"
                                           placeholder="Enter Car Name"
                                           value="{{ old('car_name') }}">
                                </div>
                            </div>

                            <!-- Car Image -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Car Image</label>
                                    <div class="custom-file">
                                        <input type="file"
                                               name="car_image"
                                               class="custom-file-input"
                                               id="carImage">
                                        <label class="custom-file-label" for="carImage">
                                            Choose file
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Passengers -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Seating Capacity

                                    </label>
                                    <input type="number"
                                           name="passengers"
                                           class="form-control"
                                           placeholder="Passengers"
                                           value="{{ old('passengers') }}">
                                </div>
                            </div>

                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Car Model
                                        
                                    </label>
                                    <input type="text"
                                           name="car_model"
                                           class="form-control"
                                           placeholder="Enter car model">
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Transmission Type</label>
                                <select name="transmission_type" class="form-control" required>
                                    <option value="">-- Select Transmission Type --</option>
                                    <option value="manual">Manual</option>
                                    <option value="automatic">Automatic</option>
                                    <option value="semi_automatic">Semi Automatic</option>
                                </select>
                            </div>
                            <!-- Bags -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bags</label>
                                    <input type="number"
                                           name="bags"
                                           class="form-control"
                                           placeholder="Bags"
                                           value="{{ old('bags') }}">
                                </div>
                            </div>

                            <!-- AC Type -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>AC Type</label>
                                    <input type="text"
                                           name="ac_type"
                                           class="form-control"
                                           placeholder="AC / Non AC"
                                           value="{{ old('ac_type') }}">
                                </div>
                            </div>

                          



                            <div class="form-group">
                                <label>Fuel Type</label>
                                <select name="fuel_type" class="form-control" required>
                                    <option value="">-- Select Fuel Type --</option>
                                    <option value="petrol">Petrol</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="cng">CNG</option>
                                    <option value="petrol_cng">Petrol + CNG</option>
                                </select>
                            </div>

                            <!-- Price Per KM -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price Per KM</label>
                                    <input type="number"
                                           step="0.01"
                                           name="price_per_km"
                                           class="form-control"
                                           placeholder="Enter Price Per KM"
                                           value="{{ old('price_per_km') }}">
                                </div>
                            </div>

                            <!-- Base Fare -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Base Fare</label>
                                    <input type="number"
                                           step="0.01"
                                           name="base_fare"
                                           class="form-control"
                                           placeholder="Enter Base Fare"
                                           value="{{ old('base_fare') }}">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description"
                                              class="form-control"
                                              rows="4"
                                              placeholder="Enter Description">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>

                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Featured -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Featured Car</label>

                                    <select name="is_featured" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Save Car
                        </button>

                        <a href="{{ route('cars.index') }}" class="btn btn-default">
                            Cancel
                        </a>
                    </div>

                </form>

            </div>

        </div>
    </section>

</div>

@endsection

<script>
    setTimeout(function () {
        let alerts = document.querySelectorAll('.flash-msg');

        alerts.forEach(function (alert) {
            alert.style.transition = "0.5s";
            alert.style.opacity = "0";

            setTimeout(() => {
                alert.style.display = "none";
            }, 500);
        });

    }, 4000); // 4 seconds
</script>