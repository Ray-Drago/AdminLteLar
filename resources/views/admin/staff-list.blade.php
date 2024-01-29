@extends('layouts.app')
@include('layouts.sidebar')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <!-- A grey horizontal navbar that becomes vertical on small screens -->
                        <nav class="navbar navbar-expand-sm bg-dark">
                            <!-- Links -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Staff List</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="container">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Experience</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($staff as $staffs)
                                        <tr>
                                            <td>{{ $staffs->id }}</td>
                                            <td>{{ $staffs->name }}</td>
                                            
                                            <td>
                @if ($staffs->image)
                    <img src="{{ asset('storage/' . $staffs->image) }}" alt="{{ $staffs->name }}" class="rounded-circle" width="50" height="50">
                @else
                    No image
                @endif
            </td>

                                            <td>{{ $staffs->phone }}</td>
                                            <td>{{ $staffs->email }}</td>
                                            <td>{{ $staffs->experience }}</td>
                                            <td>
                                                
                                                <!-- Toggle switch for "active" field -->
                                                <form method="POST" action="{{ route('staff.set-active', $staffs->id) }}">
                                                    @csrf
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="activeSwitch{{ $staffs->id }}"
                                                            {{ $staffs->active ? 'checked' : '' }}
                                                            onchange="this.form.submit()">
                                                        <label class="custom-control-label"
                                                            for="activeSwitch{{ $staffs->id }}"></label>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ '/staff-edit/' . $staffs->id }}"
                                                    class="btn btn-sm btn-info">Edit</a>
                                                <form method="POST" action="{{ '/staff-del/' . $staffs->id }}"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
