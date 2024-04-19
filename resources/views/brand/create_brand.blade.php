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
                    <h3 class="text-left title-2">{{ isset($brands) ? 'Edit Brand' : 'Add Brand' }}</h3>
                    <a href="{{ route('brand') }}">
                        <button type="button" class="btn btn-primary btn-sm p-2">View Brand</button>
                    </a>
                </div>
                <hr>
                <form action="{{ isset($brands) ? '/brand/update/' . $brands->id : '/brand/insert' }}" method="POST"
                    >
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label mb-1">Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $brands->name ?? '') }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug" class="control-label mb-1">Slug</label>
                        <input id="slug" name="slug" type="text" value="{{ old('slug', $brands->slug ?? '') }}"
                            class="form-control @error('slug') is-invalid @enderror">
                        @error('slug')
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
                                    {{ old('status', $brands->status ?? '') == 'on' ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info savebtn">
                            @if (isset($brands))
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