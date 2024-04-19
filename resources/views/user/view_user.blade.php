@extends('layouts.main')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">User</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <div class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item">User</li>
                </ol>
                <a href="{{ route('create.user') }}">
                    <button type="button" class="btn btn-primary btn-sm p-2">Add User</button>
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
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                <tr class="">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->phone }}</td>
                    <td><img src="{{ asset('images/' .$user->image)}}" width="100px"></td>
                    <td>
                        <a href="{{ route('edit.user', $user->id) }}"
                            class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>

                        <a href="{{ route('destroy.user', $user->id) }}"
                            class="btn btn-danger btn-sm ml-1"onclick="return confirm('Are you sure you want to delete this ?');"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
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