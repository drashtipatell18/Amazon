@extends('layouts.main')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Brand</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <div class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item">Brand</li>
                </ol>
                <a href="{{ route('brand.create') }}">
                    <button type="button" class="btn btn-primary btn-sm p-2">Add Brand</button>
                </a>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('danger'))
                <div class="alert alert-danger">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <table class="table table-hover" id="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $index => $brand)
                <tr class="">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->slug }}</td>
                    <td>
                        <a href="{{ route('edit.brand', $brand->id) }}"
                            class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>

                        <a href="{{ route('destroy.brand', $brand->id) }}"
                            class="btn btn-danger btn-sm ml-1"onclick="return confirm('Are you sure you want to delete this ?');"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
             $('#table').DataTable();

            setTimeout(function() {
                $(".alert-success").fadeOut(1000);
                $(".alert-danger").fadeOut(1000);
            }, 1000);
        });
    </script>
@endpush