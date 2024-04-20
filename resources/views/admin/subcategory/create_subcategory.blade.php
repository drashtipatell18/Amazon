@extends('layouts.main')
@section('content')
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
                    action="{{ isset($subcategory) ? route('update.subcategory', $subcategory->id) : route('category.store') }}"
                    enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Select Category</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select form-control" name="category" style="width: 100%; height: 38px">
                                <option value="Select" disabled>Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </option>
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

                    <div class="form-group">
                        <label for="status" class="control-label mb-1">Status</label>
                        <div class="mt-2">
                            <label class="switch">
                                <input type="checkbox" id="status" name="status"
                                    {{ old('status', $brands->status ?? '') == 'on' ? 'checked' : '' }}>
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
