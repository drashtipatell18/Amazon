@extends('layouts.main')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Categorys</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <div class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item">Tables</li>
                </ol>
                <a href="{{ route('category.create') }}">
                    <button type="button" class="btn btn-primary btn-sm p-2">Add Category</button>
                </a>
            </div>
        </div>
        <table id="category-table" class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $index =>$cat)
                    <tr>
                        <th>{{ $index + 1 }}</th>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->slug }}</td>
                        <td>
                            <a href="{{ route('edit.category', $cat->id) }}" class="btn btn-success btn-sm"><i
                                    class="bi bi-pencil"></i></a>
                            <a href="{{ route('destroy.category', $cat->id) }}"
                                class="btn btn-danger btn-sm ml-1" onclick="return confirm('Are you sure you want to delete this ?');"><i
                                    class="bi bi-trash3"></i></a>
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
            $('#category-table').DataTable();
        });
    </script>
@endpush
