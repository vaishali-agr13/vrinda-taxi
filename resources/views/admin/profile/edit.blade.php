@extends('admin.layouts.master')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Edit Profile</h3>
        </div>

        <div class="card-body">

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

            <form action="{{ route('admin.profile.update') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name', $admin->name) }}"
                    >
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email', $admin->email) }}"
                    >
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="mb-3">
                        <label>Profile Image</label>

                        @if($admin->profile_image)
                            <div class="mb-2">
                                <img src="{{ asset('public/uploads/profile_image/' . $admin->profile_image) }}"
                                                 width="100"
                                                 height="60"
                                                 style="object-fit:cover; border-radius:5px;">
                            </div>

                        @endif

                        <input type="file"
                            name="profile_image"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>New Password</label>
                        <input type="password"
                            name="password"
                            class="form-control">
                        <small class="text-muted">
                            Leave blank if you don't want to change the password.
                        </small>
                    </div>

                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input type="password"
                            name="password_confirmation"
                            class="form-control">
                    </div>

                <button type="submit" class="btn btn-primary">
                    Update Profile
                </button>

            </form>

        </div>
    </div>

</div>

@endsection