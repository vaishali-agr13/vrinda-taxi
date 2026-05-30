@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>Add Tour Package</h1>
        </div>
    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">Create Tour Package</h3>
                </div>

                <form action="{{ route('tour-packages.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="card-body">

                        {{-- ================= PACKAGE DETAILS ================= --}}

                        <h4 class="mb-3">Package Details</h4>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>

                                    <input type="text"
                                           name="title"
                                           class="form-control"
                                           placeholder="Enter Package Title">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Duration</label>

                                    <input type="text"
                                           name="duration"
                                           class="form-control"
                                           placeholder="3 Nights / 4 Days">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Location</label>

                                    <input type="text"
                                           name="location"
                                           class="form-control"
                                           placeholder="Enter Location">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Banner Image</label>

                                    <input type="file"
                                           name="banner_image"
                                           class="form-control">
                                </div>
                            </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Featured Image</label>

                                    <input type="file"
                                           name="featured_image"
                                           class="form-control">
                                </div>
                            </div>
                        </div>

                        {{-- ================= ITINERARY ================= --}}

                        <hr>

                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <h4>Tour Itinerary</h4>

                            <button type="button"
                                    class="btn btn-success btn-sm"
                                    id="addDayBtn">
                                + Add More Day
                            </button>

                        </div>

                        <div id="itinerary-wrapper">

                            <div class="itinerary-item border p-3 mb-3">

                                <div class="row">

                                    <div class="col-md-2">
                                        <div class="form-group">

                                            <label>Day Number</label>

                                            <input type="number"
                                                   name="day_number[]"
                                                   class="form-control"
                                                   placeholder="1">

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label>Title</label>

                                            <input type="text"
                                                   name="itinerary_title[]"
                                                   class="form-control"
                                                   placeholder="Day Title">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>Description</label>

                                            <textarea name="itinerary_description[]"
                                                      class="form-control"
                                                      rows="2"
                                                      placeholder="Enter Description"></textarea>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- ================= INCLUSIONS ================= --}}

                        <hr>

                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <h4>Package Inclusions</h4>

                            <button type="button"
                                    class="btn btn-primary btn-sm"
                                    id="addInclusionBtn">
                                + Add Inclusion
                            </button>

                        </div>

                        <div id="inclusion-wrapper">

                            <div class="inclusion-item mb-2">

                                <input type="text"
                                       name="inclusions[]"
                                       class="form-control"
                                       placeholder="Enter Inclusion">

                            </div>

                        </div>

                        {{-- ================= EXCLUSIONS ================= --}}

                        <hr>

                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <h4>Package Exclusions</h4>

                            <button type="button"
                                    class="btn btn-danger btn-sm"
                                    id="addExclusionBtn">
                                + Add Exclusion
                            </button>

                        </div>

                        <div id="exclusion-wrapper">

                            <div class="exclusion-item mb-2">

                                <input type="text"
                                       name="exclusions[]"
                                       class="form-control"
                                       placeholder="Enter Exclusion">

                            </div>

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit" class="btn btn-success">
                            Save Package
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

@endsection


@section('scripts')

<script>

    // ================= ADD MORE DAYS =================

    document.getElementById('addDayBtn').addEventListener('click', function () {

        let html = `
        
        <div class="itinerary-item border p-3 mb-3 position-relative">

            <button type="button"
                    class="btn btn-danger btn-sm remove-day"
                    style="position:absolute; top:10px; right:10px;">
                X
            </button>

            <div class="row">

                <div class="col-md-2">
                    <div class="form-group">

                        <label>Day Number</label>

                        <input type="number"
                               name="day_number[]"
                               class="form-control">

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">

                        <label>Title</label>

                        <input type="text"
                               name="itinerary_title[]"
                               class="form-control">

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">

                        <label>Description</label>

                        <textarea name="itinerary_description[]"
                                  class="form-control"
                                  rows="2"></textarea>

                    </div>
                </div>

            </div>

        </div>
        `;

        document.getElementById('itinerary-wrapper')
                .insertAdjacentHTML('beforeend', html);

    });


    // ================= REMOVE DAY =================

    document.addEventListener('click', function (e) {

        if(e.target.classList.contains('remove-day'))
        {
            e.target.closest('.itinerary-item').remove();
        }

    });


    // ================= ADD INCLUSION =================

    document.getElementById('addInclusionBtn').addEventListener('click', function () {

        let html = `
        
        <div class="inclusion-item mb-2 d-flex">

            <input type="text"
                   name="inclusions[]"
                   class="form-control"
                   placeholder="Enter Inclusion">

            <button type="button"
                    class="btn btn-danger ml-2 remove-inclusion">
                X
            </button>

        </div>
        `;

        document.getElementById('inclusion-wrapper')
                .insertAdjacentHTML('beforeend', html);

    });


    // ================= REMOVE INCLUSION =================

    document.addEventListener('click', function (e) {

        if(e.target.classList.contains('remove-inclusion'))
        {
            e.target.closest('.inclusion-item').remove();
        }

    });


    // ================= ADD EXCLUSION =================

    document.getElementById('addExclusionBtn').addEventListener('click', function () {

        let html = `
        
        <div class="exclusion-item mb-2 d-flex">

            <input type="text"
                   name="exclusions[]"
                   class="form-control"
                   placeholder="Enter Exclusion">

            <button type="button"
                    class="btn btn-danger ml-2 remove-exclusion">
                X
            </button>

        </div>
        `;

        document.getElementById('exclusion-wrapper')
                .insertAdjacentHTML('beforeend', html);

    });


    // ================= REMOVE EXCLUSION =================

    document.addEventListener('click', function (e) {

        if(e.target.classList.contains('remove-exclusion'))
        {
            e.target.closest('.exclusion-item').remove();
        }

    });

</script>

@endsection