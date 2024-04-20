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
                    <h3 class="title-2">{{ isset($subcategory) ? 'Edit Sub Categorys' : 'Add Sub Categorys' }}</h3>
                    <a href="{{ route('category') }}">
                        <button type="button" class="btn btn-primary btn-sm p-2">View Sub Category</button>
                    </a>
                </div>
                <hr>
                <form data-parsley-validate class="form-horizontal form-label-left"
                    action="{{ isset($subcategory) ? route('update.subcategory', $subcategory->id) : route('subcategory.store') }}"
                    enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Select Category</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="category">
                                @foreach ($category as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                placeholder="Name" name="name"
                                value="{{ old('name', isset($subcategory) ? $subcategory->name : '') }}">
                            @error('name')
                                <span class="invalid-feedback" style="color: red">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Slug</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('name') is-invalid @enderror" placeholder="Slug"
                                type="text" name="slug"
                                value="{{ old('slug', isset($subcategory) ? $subcategory->slug : '') }}">
                            @error('slug')
                                <span class="invalid-feedback" style="color: red">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                        <div class="col-sm-12 col-md-10">
                            <label class="switch">
                                <input type="checkbox" id="status" name="status"
                                    {{ old('status', $subcategory->status ?? '') == 'on' ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="">
                            <button type="submit" class="btn btn-primary">
                                @if (isset($subcategory))
                                    Update
                                @else
                                    Save
                                @endif
                            </button>
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
