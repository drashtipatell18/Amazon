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
                <div class="card-title">
                    <h3 class="text-center title-2">{{ isset($products) ? 'Edit Product' : 'Add Product' }}</h3>
                </div>
                <hr>

                <form>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('title') is-invalid @enderror" type="text"
                                value="{{ isset($products->title) ? $products->title : '' }}" name="title"
                                placeholder="Enter Name">
                        </div>
                        @error('title')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Slug</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('slug') is-invalid @enderror"
                                value="{{ isset($products->slug) ? $products->slug : '' }}" type="text" name="slug"
                                placeholder="Enter Slug">
                        </div>
                        @error('slug')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="2"
                                placeholder="Enter Description">{{ isset($products->description) ? $products->description : '' }}</textarea>
                        </div>
                        @error('description')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('price') is-invalid @enderror"
                                value="{{ isset($products->price) ? $products->price : '' }}" type="number" name="price"
                                placeholder="Enter Price">
                        </div>
                        @error('price')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Compare Price</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('compare_price') is-invalid @enderror"
                                value="{{ isset($products->compare_price) ? $products->compare_price : '' }}" type="number"
                                name="compare_price" placeholder="Enter Compare Price">
                        </div>
                        @error('compare_price')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="category_id">
                                <option value="">Select a Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">SubCategory Name</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="sub_category_id">
                                <option value="">Select a Sub Category</option>
                                @foreach ($subCategories as $subCategory)
                                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('sub_category_id')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Brand Name</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="brand_id">
                                <option value="">Select a Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('brand_id')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Featured</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="track_qty">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        @error('is_featured')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Sku</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('sku') is-invalid @enderror"
                                value="{{ isset($products->sku) ? $products->sku : '' }}" type="text" name="sku"
                                placeholder="Enter SKU">
                        </div>
                        @error('sku')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Track Qty</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="track_qty">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        @error('track_qty')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Qty</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('qty') is-invalid @enderror"
                                value="{{ isset($products->qty) ? $products->qty : '' }}" type="number" name="qty"
                                placeholder="Enter Qty">
                        </div>
                        @error('qty')
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                        <div class="col-sm-12 col-md-10">
                            <label class="switch">
                                <input type="checkbox" id="status" name="status"
                                    {{ old('status', $products->status ?? '') == 'on' ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info savebtn">
                            @if (isset($products))
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
