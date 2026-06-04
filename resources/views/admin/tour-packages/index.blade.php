@extends('admin.layouts.master')

@section('content')

<div class="row mb-3">
    <div class="col-md-6">
        <h1>Tour Packages</h1>
    </div>

    <div class="col-md-6 text-right">
        <a href="{{ route('tour-packages.create') }}"
           class="btn btn-primary">
            Add New Package
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Tour Packages</h3>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Banner</th>

                                <th>Title</th>

                                <th>Duration</th>

                                <th>Location</th>

                                <th>Created At</th>

                                <th width="150">Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($packages as $package)

                                <tr>

                                    <td>
                                        {{ $package->id }}
                                    </td>

                                    <td>

                                        @if($package->banner_image)

                                            <img src="{{ asset('public/uploads/tours/' . $package->banner_image) }}"
                                                 width="80"
                                                 height="60"
                                                 style="object-fit:cover; border-radius:5px;">

                                        @else

                                            N/A

                                        @endif

                                    </td>

                                    <td>
                                        {{ $package->title }}
                                    </td>

                                    <td>
                                        {{ $package->duration }}
                                    </td>

                                    <td>
                                        {{ $package->location }}
                                    </td>

                                    <td>
                                        {{ $package->created_at->format('d M Y') }}
                                    </td>

                                    <td>

                                        <form action="{{ route('tour-packages.destroy', $package->id) }}"
                                            method="POST"
                                            style="display:inline-block;"
                                            onsubmit="return confirm('Are you sure you want to delete this package?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>

                                        </form>

                                        <a href="{{ route('tour-packages.edit', $package->id) }}"
                                           class="btn btn-sm btn-warning">

                                            Edit

                                        </a>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7" class="text-center">

                                        No Tour Packages Found

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

        </table>
    </div>
</div>

@endsection