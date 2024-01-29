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
                            <a class="nav-link text-light" href="#">Users</a>
                            </li>
                        </ul>
                        </nav>
                        <div class="container">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th> Name</th>
                                    <th>Email</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $users)

                                        <tr>
                                            <th>{{$users->id}}</th>
                                            <th>{{$users->name}}</th>
                                            <th>{{$users->email}}</th>
                                            

                                        
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