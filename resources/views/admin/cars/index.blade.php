@extends('admin.layouts.master')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Cars List</h3>

        <a href="{{ route('cars.create') }}" class="btn btn-primary ml-auto">
            Add Car
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="card-body table-responsive p-0">

        <table class="table table-bordered table-striped table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Car Name</th>
                    <th>Passengers</th>
                    <th>Bags</th>
                    <th>Fuel</th>
                    <th>AC</th>
                    <th>Price/KM</th>
                    <th>Status</th>
                    <th>Featured</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse($cars as $car)

                <tr>

                    <td>{{ $car->id }}</td>

                    <td>
                        <img src="{{ asset('public/uploads/cars/'.$car->car_image) }}"
                             width="80"
                             height="60"
                             style="object-fit:cover;">
                    </td>

                    <td>{{ $car->car_name }}</td>

                    <td>{{ $car->passengers }}</td>

                    <td>{{ $car->bags }}</td>

                    <td>{{ $car->fuel_type }}</td>

                    <td>{{ $car->ac_type }}</td>

                    <td>₹{{ $car->price_per_km }}</td>

                    <td>
                        @if($car->status == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                    </td>

                    <td>
                        @if($car->is_featured == 1)
                            <span class="badge badge-primary">Yes</span>
                        @else
                            <span class="badge badge-secondary">No</span>
                        @endif
                    </td>

                    <td>

                        <a href="{{ route('cars.edit', $car->id) }}"
                           class="btn btn-sm btn-warning">
                            Edit
                        </a>

                        <form action="{{ route('cars.destroy', $car->id) }}"
                              method="POST"
                              style="display:inline-block;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this car?')">
                                Delete
                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="11" class="text-center">
                        No Cars Found
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <div class="card-footer clearfix">
        {{ $cars->links() }}
    </div>

</div>

@endsection
