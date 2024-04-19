@extends('layouts.main')
@section('content')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #916ca5 !important;
        }

        input:focus+.slider {
            background-color: #916ca5 !important;
        }

        input:checked+.slider:before {
            transform: translateX(16px);
        }

        .savebtn {
            background-color: #916ca5 !important;
        }
    </style>
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="card-title d-flex justify-content-between">
                    <h3 class="text-left title-2">{{ isset($users) ? 'Edit User' : 'Add User' }}</h3>
                    <a href="{{ route('user') }}">
                        <button type="button" class="btn btn-primary btn-sm p-2">View User</button>
                    </a>
                </div>
                <hr>
                <form action="{{ isset($users) ? '/admin/user/update/' . $users->id : '/admin/user/insert' }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label mb-1">Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $users->name ?? '') }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label mb-1">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email', $users->email ?? '') }}"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone" class="control-label mb-1">Phone</label>
                        <input id="phone" name="phone" type="number" value="{{ old('phone', $users->phone ?? '') }}"
                            class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gender" class="control-label mb-1">Gender</label>
                        <div class="mt-2">
                            <input type="radio" id="male" name="gender" value="male"
                                class="@error('gender') is-invalid @enderror"
                                {{ old('gender', $users->gender ?? '') == 'male' ? 'checked' : '' }}>
                            <label for="male">Male</label>

                            <input type="radio" id="female" name="gender" value="female"
                                class="@error('gender') is-invalid @enderror"
                                {{ old('gender', $users->gender ?? '') == 'female' ? 'checked' : '' }}>
                            <label for="female">Female</label>
                        </div>
                        @error('gender')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status" class="control-label mb-1">Status</label>
                        <div class="mt-2">
                            <!-- Toggle Switch -->
                            <label class="switch">
                                <input type="checkbox" id="status" name="status"
                                    {{ old('status', $users->status ?? '') == 'on' ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    @if (!isset($users))
                        <div class="form-group">
                            <label for="password" class="control-label mb-1">password</label>
                            <input id="password" name="password" type="password"
                                value="{{ old('password', $users->password ?? '') }}"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="invalid-feedback" style="color: red">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="image" id="imageLabel" class="control-label mb-1">Old Image</label>
                        @if (isset($users) && $users->image)
                            <img id="oldImage" src="{{ asset('images/' . $users->image) }}" alt="Uploaded Document"
                                width="100">
                            <input type="hidden" class="form-control" name="oldimage" value="{{ $users->image }}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label mb-1">Image</label>
                        <input type="file" id="profilepicInput" class="form-control" name="image">
                        @error('image')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info savebtn">
                            @if (isset($users))
                                Update
                            @else
                                Save
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#profilepicInput').change(function(e) {
                var fileName = e.target.files[0];
                if (fileName) {
                    $('#imageLabel').text('New Image'); // Change the label text

                    // Display the new image in the img tag
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#oldImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(fileName);
                }
            });
        });
    </script>
@endpush